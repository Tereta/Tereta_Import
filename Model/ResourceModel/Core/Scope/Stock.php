<?php
namespace Tereta\Import\Model\ResourceModel\Core\Scope;

use Tereta\Import\Model\ResourceModel\Core\Scope\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Store\Model\StoreManagerInterface;
use Tereta\Import\Model\Logger;
use Magento\InventorySalesApi\Api\StockResolverInterface;
use Magento\InventorySalesApi\Api\Data\SalesChannelInterface;
use Magento\InventoryApi\Api\GetSourcesAssignedToStockOrderedByPriorityInterface;

class Stock extends AbstractDb
{
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var StockResolverInterface
     */
    protected $stockResolver;

    /**
     * @var GetSourcesAssignedToStockOrderedByPriorityInterface
     */
    protected $getSourcesAssignedToStockOrderedByPriority;

    /**
     * @var array
     */
    protected $stockDataRecords = [];

    /**
     * @var array
     */
    protected $stockItemDataRecords = [];

    /**
     * @var array
     */
    protected $stockSourceDataRecords = [];

    /**
     * Stock constructor.
     * @param GetSourcesAssignedToStockOrderedByPriorityInterface $getSourcesAssignedToStockOrderedByPriority
     * @param StockResolverInterface $stockResolver
     * @param StoreManagerInterface $storeManager
     * @param Context $context
     * @param null $connectionName
     */
    public function __construct(
        GetSourcesAssignedToStockOrderedByPriorityInterface $getSourcesAssignedToStockOrderedByPriority,
        StockResolverInterface $stockResolver,
        StoreManagerInterface $storeManager,
        Context $context,
        $connectionName = null
    ) {
        $this->getSourcesAssignedToStockOrderedByPriority = $getSourcesAssignedToStockOrderedByPriority;
        $this->stockResolver = $stockResolver;
        $this->storeManager = $storeManager;
        parent::__construct($context, $connectionName);
    }

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('cataloginventory_stock_status', 'product_id');
    }

    /**
     * @return int
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    protected function getStockId()
    {
        $websiteId = $this->configuration->getData('website_id');
        $websiteObject = $this->storeManager->getWebsite($websiteId);
        $websiteCode = $websiteObject->getCode();
        $stock = $this->stockResolver->execute(SalesChannelInterface::TYPE_WEBSITE, $websiteCode);
        return (int)$stock->getStockId();
    }

    /**
     * @param int $stockId
     * @return array
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function getSourceCodesAssignedToStock(int $stockId): array
    {
        $sources = $this->getSourcesAssignedToStockOrderedByPriority->execute($stockId);
        $sourceCodes = [];
        foreach ($sources as $source) {
            if ($source->isEnabled()) {
                $sourceCodes[] = $source->getSourceCode();
            }
        }

        return $sourceCodes;
    }

    /**
     * @param $data
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function collect($data)
    {
        $productSku = $data['sku'];
        $stockId = $this->getStockId(); // STOCK ID SHOULD BE GET FROM DAATBASE ALEXDEB
        $websiteId = $this->configuration->getData('website_id');

        if (isset($data['qty']) && $data['qty'] != '') {
            $data['qty'] = (int) filter_var($data['qty'], FILTER_SANITIZE_NUMBER_INT);
        }

        // Stock status
        $record = [
            'product_id' => null,
            'website_id' => (string)$websiteId,
            'stock_id' => (string)$stockId
        ];

        if (isset($data['is_in_stock']) && $data['is_in_stock'] !== '') {
            $record['stock_status'] = $this->getBooleanValue(strtolower($data['is_in_stock']));
        }

        if (isset($data['qty']) && $data['qty'] !== '') {
            $record['qty'] = $data['qty'];
        }

        if (!isset($record['stock_status']) && !isset($record['qty'])) {
            return;
        }

        $this->stockDataRecords[$productSku] = $record;

        // Stock Item
        $record = [
            'product_id' => null,
            'website_id' => (string)$websiteId,
            'stock_id' => (string)$stockId
        ];

        if (isset($data['is_in_stock']) && $data['is_in_stock'] !== '') {
            $record['is_in_stock'] = $this->getBooleanValue(strtolower($data['is_in_stock']));
            $data['manage_stock'] = true;
        }

        if (isset($data['manage_stock']) && $data['manage_stock'] !== '') {
            $record['manage_stock'] = $this->getBooleanValue(strtolower($data['manage_stock']));
            $record['use_config_manage_stock'] = false;
        }

        if (isset($data['qty']) && $data['qty'] !== '') {
            $record['qty'] = $data['qty'];
        }

        $this->stockItemDataRecords[$productSku] = $record;

        // Stock Item
        foreach ($this->getSourceCodesAssignedToStock($stockId) as $sourceCode) {
            $record = [
                'source_code' => $sourceCode,
                'sku' => $productSku
            ];

            if (isset($data['is_in_stock']) && $data['is_in_stock'] !== '') {
                $record['status'] = $this->getBooleanValue(strtolower($data['is_in_stock']));
            }

            if (isset($data['qty']) && $data['qty']) {
                $record['quantity'] = $data['qty'];
            }

            if (isset($record['status']) || isset($record['quantity'])) {
                array_push($this->stockSourceDataRecords, $record);
            }
        }
    }

    /**
     * @var array
     */
    protected $booleanValues = [
        false => ['no', 'n', 'false', 0],
        true => ['yes', 'y', 'true', 1]
    ];

    /**
     * @param $value
     * @return bool|null
     */
    protected function getBooleanValue($value)
    {
        if (in_array($value, $this->booleanValues[true])){
            return true;
        }

        if (in_array($value, $this->booleanValues[false])){
            return false;
        }

        return null;
    }

    /**
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function saveStock()
    {
        $connection = $this->getConnection();

        $stockId = 1; // In the feature need to get the ID from the system
        $productIds = [];
        $storeId = $this->configuration->getData('store_id');
        $storeModel = $this->storeManager->getStore($storeId);

        $stockDataRecords = $this->stockDataRecords;

        // $stockDataRecords
        $stockStatusIds = [];
        foreach($stockDataRecords as $key=>$item) {
            array_push($stockStatusIds, $item['product_id']);

            if (!in_array($productIds, $item['product_id'])) {
                array_push($productIds, $item['product_id']);
            }
        }

        $select = $connection->select()->from($this->getTable('cataloginventory_stock_status'));
        $select->where('product_id IN (?)', $stockStatusIds);
        $select->where('stock_id = ?', $stockId);
        $select->where('website_id = ?', $storeModel->getWebsiteId());

        $loadedRecords = $connection->fetchAll($select);
        $stockDataRecordsInsert = $stockDataRecords;
        foreach($loadedRecords as $item) {
            $stockDataRecords[$item['product_id']] = $stockDataRecords[$item['product_id']] + $item;
            unset($stockDataRecordsInsert[$item['product_id']]);
        }

        try{
            foreach($stockDataRecords as $item) {
                $this->getConnection()->update(
                    $this->getTable('cataloginventory_stock_status'),
                    $item,
                    ['product_id = ?' => $item['product_id'], 'stock_id = ?' => $item['stock_id'], 'website_id = ?' => $item['website_id']]
                );
            }
            $this->logger->debug("Updated " . count($stockDataRecords) . " records in the 'cataloginventory_stock_status' table");

            foreach($stockDataRecordsInsert as $key=>$item) {
                if (!isset($stockDataRecordsInsert[$key]['qty'])) {
                    $stockDataRecordsInsert[$key]['qty'] = 0;
                }
                if (!isset($stockDataRecordsInsert[$key]['stock_status'])) {
                    $stockDataRecordsInsert[$key]['stock_status'] = 0;
                }
            }

            if ($stockDataRecordsInsert) {
                $connection->insertOnDuplicate($this->getTable('cataloginventory_stock_status'), $stockDataRecordsInsert, ['product_id', 'website_id', 'stock_id', 'qty', 'stock_status']);
            }

            $this->logger->debug("Inserted " . count($stockDataRecordsInsert) . " records into the 'cataloginventory_stock_status' table");
        }
        catch(\Exception $e) {
            throw $e;
        }

        // StockItemDataRecords
        $stockItemDataRecords = $this->stockItemDataRecords;
        $stockStatusIds = [];
        foreach($stockItemDataRecords as $key=>$item) {
            array_push($stockStatusIds, $item['product_id']);
            if (!in_array($productIds, $item['product_id'])) {
                array_push($productIds, $item['product_id']);
            }
        }

        $select = $connection->select()->from($this->getTable('cataloginventory_stock_item'));
        $select->where('product_id IN (?)', $stockStatusIds);
        $select->where('stock_id = ?', $stockId);
        $select->where('website_id = ?', $storeModel->getWebsiteId());

        $loadedRecords = $connection->fetchAll($select);
        $stockItemDataRecordsInsert = $stockItemDataRecords;
        foreach($loadedRecords as $item) {
            $stockItemDataRecords[$item['product_id']] = $stockItemDataRecords[$item['product_id']] + $item;
            unset($stockItemDataRecordsInsert[$item['product_id']]);
        }

        try {
            foreach($stockItemDataRecords as $item) {
                $this->getConnection()->update(
                    $this->getTable('cataloginventory_stock_item'),
                    $item,
                    ['product_id = ?' => $item['product_id'], 'stock_id = ?' => $item['stock_id'], 'website_id = ?' => $item['website_id']]
                );
            }


            $this->logger->debug("Updated " . count($stockItemDataRecords) . " records in the 'cataloginventory_stock_item' table");

            if ($stockItemDataRecordsInsert) {
                $connection->insertOnDuplicate($this->getTable('cataloginventory_stock_item'), $stockItemDataRecordsInsert);
            }
            $this->logger->debug("Inserted " . count($stockItemDataRecordsInsert) . " records into the 'cataloginventory_stock_item' table");
        }
        catch(\Exception $e) {
            throw $e;
        }

        // Source Stock Data
        if ($this->stockSourceDataRecords) {
            $connection->insertOnDuplicate($this->getTable('inventory_source_item'), $this->stockSourceDataRecords, ['source_code', 'sku']);
            $this->logger->debug("InsertOnDuplicate " . count($this->stockSourceDataRecords) . " records into the 'inventory_source_item' table");
        }

        // Indexer
        $time = time();
        $this->indexerRegistry->get(\Magento\InventoryIndexer\Indexer\InventoryIndexer::INDEXER_ID)->reindexList($productIds);
        $this->logger->debug('The ' . \Magento\InventoryIndexer\Indexer\InventoryIndexer::INDEXER_ID . ' index was processed in: ' . (time() - $time) . 'sec.');

        $time = time();
        $this->indexerRegistry->get(\Magento\CatalogInventory\Model\Indexer\Stock\Processor::INDEXER_ID)->reindexList($productIds);
        $this->logger->debug('The ' . \Magento\CatalogInventory\Model\Indexer\Stock\Processor::INDEXER_ID . ' index was processed in: ' . (time() - $time) . 'sec.');
    }

    /**
     * @param $skuEntities
     */
    public function fillEntityIds($skuEntities)
    {
        // Stock status
        $recordsArrayIdKeys = [];

        foreach ($this->stockDataRecords as $sku => $item) {
            $skuData = ($sku ? $skuEntities->getData($sku) : null);
            if (!$skuData) {
                unset($this->stockDataRecords[$sku]);
                continue;
            }

            foreach ($this->stockDataRecords[$sku] as $key => $item) {
                $this->stockDataRecords[$sku]['product_id'] = $skuData['entity_id'];
                $recordsArrayIdKeys[$skuData['entity_id']] = $this->stockDataRecords[$sku];
            }
        }

        $this->stockDataRecords = $recordsArrayIdKeys;

        // Stock item status
        $recordsArrayIdKeys = [];
        foreach ($this->stockItemDataRecords as $sku => $item) {
            $skuData = $skuEntities->getData($sku);
            if (!$skuData) {
                unset($this->stockItemDataRecords[$sku]);
                continue;
            }

            foreach ($this->stockItemDataRecords[$sku] as $key => $item) {
                $this->stockItemDataRecords[$sku]['product_id'] = $skuData['entity_id'];
                $recordsArrayIdKeys[$skuData['entity_id']] = $this->stockItemDataRecords[$sku];
            }
        }

        $this->stockItemDataRecords = $recordsArrayIdKeys;
    }
}