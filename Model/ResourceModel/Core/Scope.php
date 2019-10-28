<?php
namespace Tereta\Import\Model\ResourceModel\Core;

use Magento\Catalog\Model\Product as ProductModel;
use Magento\Eav\Model\AttributeRepository;
use Tereta\Import\Model\Core\Scope as ScopeModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Framework\DataObject;
use Tereta\Import\Model\Logger;
use Magento\Framework\DataObjectFactory;
use Magento\Framework\Indexer\IndexerRegistry;

class Scope extends AbstractDb
{
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var DataObjectFactory
     */
    protected $dataObjectFactory;

    /**
     * @var DataObject
     */
    protected $configuration;

    /**
     * @var AttributeRepository
     */
    protected $attributeRepository;

    /**
     * @var array
     */
    protected $statisticFieldSkuSkipped = [];

    /**
     * @var array
     */
    protected $statisticRowFieldSkuSkipped = [];

    /**
     * @var IndexerRegistry
     */
    protected $indexerRegistry;

    /**
     * Scope constructor.
     * @param IndexerRegistry $indexerRegistry
     * @param AttributeRepository $attributeRepository
     * @param DataObjectFactory $dataObjectFactory
     * @param Context $context
     * @param Logger $logger
     * @param null $connectionName
     */
    public function __construct(
        IndexerRegistry $indexerRegistry,
        AttributeRepository $attributeRepository,
        DataObjectFactory $dataObjectFactory,
        Context $context,
        Logger $logger,
        $connectionName = null
    ) {
        $this->indexerRegistry = $indexerRegistry;
        $this->attributeRepository = $attributeRepository;
        $this->dataObjectFactory = $dataObjectFactory;
        $this->logger = $logger;
        $this->configuration = $dataObjectFactory->create();

        parent::__construct($context, $connectionName);
    }

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('catalog_product_entity', 'entity_id');
    }

    /**
     * @param Logger $logger
     * @return $this
     */
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
        return $this;
    }

    /**
     * @param $configuration
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * @param array $skus
     * @return array
     */
    public function getEntities(array $skus)
    {
        $connection = $this->getConnection();

        $skusArray = [];
        foreach(array_keys($skus) as $item) {
            array_push($skusArray, (string) $item);
        }

        $select = $connection
            ->select(['entity_id', 'sku'])
            ->from($this->getTable('catalog_product_entity'))->where('sku IN (?)', $skusArray);
        return $connection->fetchAll($select);
    }

    public function saveEntityWebsite($skus)
    {
        $websiteId = $this->configuration->getWebsiteId();
        $arrayToInsert = [];
        foreach ($skus->getData() as $item){
            array_push($arrayToInsert, [
                'product_id' => $item['entity_id'],
                'website_id' => 1 // ALEXDEB
            ]);
        }

        if ($arrayToInsert) {
            $connection = $this->getConnection();
            $connection->insertOnDuplicate($this->getTable('catalog_product_website'), $arrayToInsert, ['product_id', 'website_id']);
        }

        $this->logger->debug("Inserted on duplicate " . count($arrayToInsert) . " records into the 'catalog_product_website' table");
    }

    /**
     * @param DataObject $skuEntities
     * @param array $attributeTypeEntities
     */
    public function saveTypeValues(DataObject $skuEntities, array $attributeTypeEntities)
    {
        $connection = $this->getConnection();

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_INT, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_int'), $data);
        }
        $this->logger->debug("Updated or inserted " . count($data) . " records in the 'catalog_product_entity_int' table");

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_DECIMAL, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_decimal'), $data);
        }
        $this->logger->debug("Updated or inserted " . count($data) . " records in the 'catalog_product_entity_decimal' table");

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_DATETIME, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_datetime'), $data);
        }
        $this->logger->debug("Updated or inserted " . count($data) . " records in the 'catalog_product_entity_datetime' table");

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_TEXT, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_text'), $data);
        }
        $this->logger->debug("Updated or inserted " . count($data) . " records in the 'catalog_product_entity_text' table");

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_VARCHAR, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_varchar'), $data);
        }
        $this->logger->debug("Updated or inserted " . count($data) . " records in the 'catalog_product_entity_varchar' table");
    }

    /**
     *
     */
    public function reindex(DataObject $skuEntities)
    {
        $productIds = [];
        foreach($skuEntities->getData() as $item) {
            array_push($productIds, $item['entity_id']);
        }

        $time = time();
        $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Product\Eav\Processor::INDEXER_ID)->reindexList($productIds);
        $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Eav\Processor::INDEXER_ID . ' index was processed in: ' . (time() - $time) . 'sec.');

        $time = time();
        $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Product\Price\Processor::INDEXER_ID)->reindexList($productIds);
        $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Price\Processor::INDEXER_ID . ' index was processed in: ' . (time() - $time) . 'sec.');

        try{
            $time = time();
            $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Product\Flat\Processor::INDEXER_ID)->reindexList($productIds);
            $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Flat\Processor::INDEXER_ID . ' index was processed in: ' . (time() - $time) . 'sec.');
        }
        catch(\Exception $e) {
            $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Flat\Processor::INDEXER_ID . ' index is not avaliable.');
        }

        $time = time();
        $this->indexerRegistry->get(\Magento\CatalogSearch\Model\Indexer\Fulltext\Processor::INDEXER_ID)->reindexList($productIds);
        $this->logger->debug('The ' . \Magento\CatalogSearch\Model\Indexer\Fulltext\Processor::INDEXER_ID . ' index was processed in: ' . (time() - $time) . 'sec.');
    }

    /**
     * @param DataObject $skuEntities
     * @param array $attributeTypeEntities
     */
    public function removeTypeValues(DataObject $skuEntities, array $attributeTypeEntities)
    {
        $connection = $this->getConnection();

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_INT, $attributeTypeEntities)) {
            $select = $connection->select()->from($this->getTable('catalog_product_entity_int'));
            foreach($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }
            $connection->query($select->deleteFromSelect('catalog_product_entity_int'));
        }

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_DECIMAL, $attributeTypeEntities)) {
            $select = $connection->select()->from($this->getTable('catalog_product_entity_decimal'));
            foreach($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }
            $connection->query($select->deleteFromSelect('catalog_product_entity_decimal'));
        }

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_DATETIME, $attributeTypeEntities)) {
            $select = $connection->select()->from($this->getTable('catalog_product_entity_datetime'));
            foreach($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }
            $connection->query($select->deleteFromSelect('catalog_product_entity_datetime'));
        }

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_TEXT, $attributeTypeEntities)) {
            $select = $connection->select()->from($this->getTable('catalog_product_entity_text'));
            foreach($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }
            $connection->query($select->deleteFromSelect('catalog_product_entity_text'));
        }

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_VARCHAR, $attributeTypeEntities)) {
            $select = $connection->select()->from($this->getTable('catalog_product_entity_varchar'));
            foreach($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }
            $connection->query($select->deleteFromSelect('catalog_product_entity_varchar'));
        }
    }

    /**
     * @return AbstractDb|void
     */
    public function beginTransaction()
    {
        $connection = $this->getConnection();
        $connection->beginTransaction();
    }

    /**
     *
     */
    public function commitTransaction()
    {
        $connection = $this->getConnection();
        $connection->commit();
    }

    /**
     * Save time whan attributes were update
     *
     * @param $skuEntities
     * @param $updateStatisticAttributes
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function saveUpdateTimes($skuEntities, $updateStatisticAttributes)
    {
        if (!$updateStatisticAttributes) {
            return;
        }

        $dateTime = date('Y-m-d H:i:s');
        $storeId = $this->configuration->getStoreId();
        $entityIds = [];
        $attributeIds = [];
        foreach($skuEntities->getData() as $item) {
            array_push($entityIds, $item['entity_id']);
        }

        foreach($updateStatisticAttributes as $item) {
            $attributeModel = $this->attributeRepository->get('catalog_product', $item);
            array_push($attributeIds, $attributeModel->getAttributeId());
        }

        $insertOrUpdate = [];
        foreach($entityIds as $entityId){
            foreach($attributeIds as $attributeId) {
                array_push($insertOrUpdate, [
                    'attribute_id' => $attributeId,
                    'store_id' => $storeId,
                    'entity_id' => $entityId,
                    'last_update' => $dateTime
                ]);
            }
        }

        $connection = $this->getConnection();
        if ($insertOrUpdate) {
            $connection->insertOnDuplicate($this->getTable('tereta_import_values_update'), $insertOrUpdate, ['attribute_id', 'store_id', 'entity_id']);
        }

        $this->logger->debug("Updated date/time " . count($insertOrUpdate) . " records into the 'tereta_import_values_update' table");
    }

    /**
     * @param string $type
     * @param array $attributeTypeEntities
     * @return array
     */
    protected function fetchTypeValues(string $type, array $attributeTypeEntities)
    {
        $valuesAgregated = [];
        if (!isset($attributeTypeEntities[$type])) {
            return [];
        }

        foreach($attributeTypeEntities[$type] as $key=>$item) {
            $valuesAgregated = array_merge($valuesAgregated, $item);
        }

        return $valuesAgregated;
    }

    /**
     * Searching for SKUs by CSV field
     *
     * @param $attributeCode
     * @param $object
     * @throws \Magento\Framework\Exception\NoSuchEntityException/home/tereta/Work/My/ExBuy/code
     */
    public function fillSkusByField($attributeCode, &$object)
    {
        if (!isset($object[$attributeCode])) {
            throw new \Exception('The "' . $attributeCode . '" field in the file document was not found to find sku by the attribute.' );
        }

        $fieldValue = $object[$attributeCode];

        $attributeModel = $this->attributeRepository->get(ProductModel::ENTITY, $attributeCode);

        $connection = $this->getConnection();
        $select = $connection->select('entity_id')->from(['source'=>$this->getTable('catalog_product_entity_' . $attributeModel->getBackendType())])
            ->where('attribute_id = ?', $attributeModel->getAttributeId())->where('value = ?', $fieldValue)
            ->where('store_id IN (?)', [0, $this->configuration->getData('store_id')])->order('store_id DESC');

        $select->join(['base'=>$this->getTable('catalog_product_entity')], 'base.entity_id = source.entity_id', ['sku']);

        $entityData = $connection->fetchRow($select);
        if (isset($entityData['sku'])) {
            $object['sku'] = $entityData['sku'];
        }
        else {
            array_push($this->statisticFieldSkuSkipped, $fieldValue);
            array_push($this->statisticRowFieldSkuSkipped, $object);
        }
    }

    /**
     * @return array
     */
    public function getStatisticFieldSkuSkipped()
    {
        return $this->statisticFieldSkuSkipped;
    }

    /**
     * @return array
     */
    public function getStatisticRowFieldSkuSkipped()
    {
        return $this->statisticRowFieldSkuSkipped;
    }

    /**
     * @param DataObject $object
     */
    public function fillSkuEntities(DataObject $object)
    {
        $skuEntities = $this->getEntities($object->getData());

        $skuEmpty = $object->getData();

        foreach($skuEntities as $key => $item) {
            unset($skuEmpty[$item['sku']]);
            $object->setData($item['sku'], $item);
        }

        $this->createSkuEntities($object, $skuEmpty);
    }

    /**
     * @param DataObject $object
     * @param $skuEmpty
     */
    public function createSkuEntities(DataObject $object, $skuEmpty){
        if (!$this->configuration->getProductCreateNew() || !$skuEmpty) {
            return;
        }

        $connection = $this->getConnection();
        $select = $connection->select('entity_id')->from($this->getTable('catalog_product_entity'))->order('entity_id DESC')->limit(1);
        $entityIdCounter = (integer) $connection->fetchOne($select);
        $recordsInsert = [];
        foreach($skuEmpty as $sku => $item) {
            $entityIdCounter++;
            array_push($recordsInsert, [
                'entity_id' => $entityIdCounter,
                'attribute_set_id' => $this->configuration->getData('product_attribute_set'),
                'sku' => $sku,
            ]);
        }

        $connection->insertOnDuplicate($this->getTable('catalog_product_entity'), $recordsInsert);

        // Fill created items
        $skuEntities = $this->getEntities($skuEmpty);
        foreach($skuEntities as $key => $item) {
            $object->setData($item['sku'], $item);
        }

        $this->logger->debug("Created " . count($skuEntities) . " new products");
    }
}