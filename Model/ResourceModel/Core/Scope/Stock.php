<?php
/**
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░     ████████╗███████╗██████╗░███████╗████████╗░█████╗░    ░█████╗░██╗░░░░░███████╗██╗░░██╗░█████╗░███╗░░██╗██████╗░███████╗██████╗░       ░
 * ░     ╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗    ██╔══██╗██║░░░░░██╔════╝╚██╗██╔╝██╔══██╗████╗░██║██╔══██╗██╔════╝██╔══██╗       ░
 * ░     ░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║    ███████║██║░░░░░█████╗░░░╚███╔╝░███████║██╔██╗██║██║░░██║█████╗░░██████╔╝       ░
 * ░     ░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║    ██╔══██║██║░░░░░██╔══╝░░░██╔██╗░██╔══██║██║╚████║██║░░██║██╔══╝░░██╔══██╗       ░
 * ░     ░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║    ██║░░██║███████╗███████╗██╔╝╚██╗██║░░██║██║░╚███║██████╔╝███████╗██║░░██║       ░
 * ░     ░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝    ╚═╝░░╚═╝╚══════╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝╚═════╝░╚══════╝╚═╝░░╚═╝       ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░      █████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗       ░
 * ░      ╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝       ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░        ░██╗░░░░░░░██╗░██╗░░░░░░░██╗░██╗░░░░░░░██╗░░░████████╗███████╗██████╗░███████╗████████╗░█████╗░░░░██████╗░███████╗██╗░░░██╗        ░
 * ░        ░██║░░██╗░░██║░██║░░██╗░░██║░██║░░██╗░░██║░░░╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗░░░██╔══██╗██╔════╝██║░░░██║        ░
 * ░        ░╚██╗████╗██╔╝░╚██╗████╗██╔╝░╚██╗████╗██╔╝░░░░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║░░░██║░░██║█████╗░░╚██╗░██╔╝        ░
 * ░        ░░████╔═████║░░░████╔═████║░░░████╔═████║░░░░░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║░░░██║░░██║██╔══╝░░░╚████╔╝░        ░
 * ░        ░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░██╗░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║██╗██████╔╝███████╗░░╚██╔╝░░        ░
 * ░        ░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░╚═╝░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝╚═╝╚═════╝░╚══════╝░░░╚═╝░░░        ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 *
 * See COPYING.txt for license details.
 * Copyright © 2020 Tereta Alexander. All rights reserved.
 * Contacts:
 *     tereta@mail.ua
 *     www.tereta.dev
 */

namespace Tereta\Import\Model\ResourceModel\Core\Scope;

use Magento\Framework\Indexer\IndexerRegistry;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\InventoryApi\Api\GetSourcesAssignedToStockOrderedByPriorityInterface;
use Magento\InventorySalesApi\Api\Data\SalesChannelInterface;
use Magento\InventorySalesApi\Api\StockResolverInterface;
use Magento\Store\Model\StoreManagerInterface;
use Exception;
use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\DataObject;

/**
 * Tereta\Import\Model\ResourceModel\Core\Scope\Stock
 *
 * Class Stock
 * @package Tereta\Import\Model\ResourceModel\Core\Scope
 * @author Tereta Alexander <tereta@mail.ua>
 */
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
     * @var IndexerRegistry
     */
    protected $indexerRegistry;

    /**
     * @var
     */
    protected $reindexProductIds;

    /**
     * @var array
     */
    protected $booleanValues = [
        false => ['no', 'n', 'false', 0],
        true => ['yes', 'y', 'true', 1]
    ];

    /**
     * Stock constructor.
     * @param GetSourcesAssignedToStockOrderedByPriorityInterface $getSourcesAssignedToStockOrderedByPriority
     * @param StockResolverInterface $stockResolver
     * @param StoreManagerInterface $storeManager
     * @param IndexerRegistry $indexerRegistry
     * @param Context $context
     * @param null $connectionName
     */
    public function __construct(
        GetSourcesAssignedToStockOrderedByPriorityInterface $getSourcesAssignedToStockOrderedByPriority,
        StockResolverInterface $stockResolver,
        StoreManagerInterface $storeManager,
        IndexerRegistry $indexerRegistry,
        Context $context,
        $connectionName = null
    ) {
        $this->indexerRegistry = $indexerRegistry;
        $this->getSourcesAssignedToStockOrderedByPriority = $getSourcesAssignedToStockOrderedByPriority;
        $this->stockResolver = $stockResolver;
        $this->storeManager = $storeManager;
        parent::__construct($context, $connectionName);
    }

    /**
     *
     */
    protected function _construct(): void
    {
        $this->_init('cataloginventory_stock_status', 'product_id');
    }

    /**
     * @return int
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    protected function getStockId(): int
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
     * @throws InputException
     * @throws LocalizedException
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
     * @param array $data
     * @throws InputException
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function collect(array $data): void
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
            'website_id' => (string) 0,
            'stock_id' => (string)$stockId
        ];

        if (isset($data['is_in_stock']) && $data['is_in_stock'] !== '') {
            $record['stock_status'] = $this->getBooleanValue(strtolower($data['is_in_stock']));
        }

        if (isset($data['qty']) && $data['qty'] !== '') {
            $record['qty'] = $data['qty'];
        }

        if (false && !isset($record['stock_status']) && !isset($record['qty'])) { // Create empty stocks
            return;
        }

        $this->stockDataRecords[$productSku] = $record;

        // Stock Item
        $record = [
            'product_id' => null,
            'website_id' => (string)$websiteId,
            'stock_id'   => (string)$stockId
        ];

        if (!isset($data['manage_stock']) && !is_null($this->getManageStockConfig())) {
            $data['manage_stock'] = $this->getManageStockConfig();
        }

        if (isset($data['is_in_stock']) && $data['is_in_stock'] !== '') {
            $record['is_in_stock'] = $this->getBooleanValue(strtolower($data['is_in_stock']));
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
                'sku' => $productSku,
                'quantity' => 0
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
     * @return bool|null
     */
    protected function getManageStockConfig(): ?bool
    {
        $manageStock = $this->configuration->getData('manage_stock');
        if ($manageStock == 1) {
            return true;
        }

        if ($manageStock == 2) {
            return false;
        }

        return null;
    }

    /**
     * @param string $value
     * @return bool|null
     */
    protected function getBooleanValue(string $value): bool
    {
        if (in_array($value, $this->booleanValues[true])) {
            return true;
        }

        if (in_array($value, $this->booleanValues[false])) {
            return false;
        }

        return false;
    }

    /**
     * @throws NoSuchEntityException
     */
    public function saveStock(): void
    {
        // cataloginventory_stock_status generated by index

        $connection = $this->getConnection();

        $stockId = 1; // In the feature need to get the ID from the system
        $productIds = [];
        $storeId = $this->configuration->getData('store_id');
        $storeModel = $this->storeManager->getStore($storeId);

        // StockItemDataRecords
        $stockItemDataRecords = $this->stockItemDataRecords;
        $stockStatusIds = [];
        foreach ($stockItemDataRecords as $key=>$item) {
            array_push($stockStatusIds, $item['product_id']);
            if (!in_array($item['product_id'], $productIds)) {
                array_push($productIds, $item['product_id']);
            }
        }

        $select = $connection->select()->from($this->getTable('cataloginventory_stock_item'));
        $select->where('product_id IN (?)', $stockStatusIds);
        $select->where('stock_id = ?', $stockId);
        $select->where('website_id = ?', $storeModel->getWebsiteId());

        $loadedRecords = $connection->fetchAll($select);
        $stockItemDataRecordsInsert = $stockItemDataRecords;
        foreach ($loadedRecords as $item) {
            $stockItemDataRecords[$item['product_id']] = $stockItemDataRecords[$item['product_id']] + $item;
            unset($stockItemDataRecordsInsert[$item['product_id']]);
        }

        try {
            foreach ($stockItemDataRecords as $item) {
                $this->getConnection()->update(
                    $this->getTable('cataloginventory_stock_item'),
                    $item,
                    ['product_id = ?' => $item['product_id'], 'stock_id = ?' => $item['stock_id'], 'website_id = ?' => $item['website_id']]
                );
            }

            $this->logger->debug(__("Updated %1 records in the 'cataloginventory_stock_item' table", count($stockItemDataRecords)));

            if ($stockItemDataRecordsInsert) {
                $connection->insertOnDuplicate(
                    $this->getTable('cataloginventory_stock_item'),
                    $stockItemDataRecordsInsert,
                    ['product_id', 'website_id', 'stock_id', 'is_in_stock', 'manage_stock', 'use_config_manage_stock', 'qty']
                );
            }
            $this->logger->debug(__("Inserted %1 records in the 'cataloginventory_stock_item' table", count($stockItemDataRecords)));
        } catch (\Exception $e) {
            throw $e;
        }

        // Source Stock Data
        if ($this->stockSourceDataRecords) {
            $connection->insertOnDuplicate(
                $this->getTable('inventory_source_item'),
                $this->stockSourceDataRecords,
                ['source_code', 'sku']
            );

            $this->logger->debug(
                __("InsertOnDuplicate %1 records into the 'inventory_source_item' table", count($this->stockSourceDataRecords))
            );
        }

        $this->reindexProductIds = $productIds;
    }

    /**
     * @param DataObject $skuEntities
     */
    public function fillEntityIds(DataObject $skuEntities): void
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
