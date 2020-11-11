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

namespace Tereta\Import\Model\ResourceModel\Core;

use Exception;
use Magento\Catalog\Model\Product as ProductModel;
use Magento\Eav\Model\AttributeRepository;
use Magento\Framework\DataObject;
use Magento\Framework\DataObjectFactory;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Store\Model\StoreManagerInterface;
use Tereta\Import\Model\Core\Scope as ScopeModel;
use Tereta\Import\Model\Logger;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class Scope
 * @package Tereta\Import\Model\ResourceModel\Core
 * @author Tereta Alexander <tereta@mail.ua>
 */
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
     * Scope constructor.
     * @param StoreManagerInterface $storeManagerInterface
     * @param AttributeRepository $attributeRepository
     * @param DataObjectFactory $dataObjectFactory
     * @param Context $context
     * @param Logger $logger
     * @param null $connectionName
     */
    public function __construct(
        StoreManagerInterface $storeManagerInterface,
        AttributeRepository $attributeRepository,
        DataObjectFactory $dataObjectFactory,
        Context $context,
        Logger $logger,
        $connectionName = null
    ) {
        $this->storeManager = $storeManagerInterface;
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
        foreach (array_keys($skus) as $item) {
            array_push($skusArray, (string) $item);
        }

        $select = $connection
            ->select(['entity_id', 'sku'])
            ->from($this->getTable('catalog_product_entity'))->where('sku IN (?)', $skusArray);
        return $connection->fetchAll($select);
    }

    /**
     * @param $skus
     */
    public function saveEntityWebsite($skus)
    {
        $websiteId = $this->configuration->getWebsiteId();
        if ($websiteId) {
            $websiteIds = [$websiteId];
        } else {
            $websiteIds = [];
            foreach ($this->storeManager->getWebsites() as $item) {
                array_push($websiteIds, $item->getWebsiteId());
            }
        }
        $arrayToInsert = [];
        foreach ($skus->getData() as $item) {
            foreach ($websiteIds as $websiteId) {
                array_push($arrayToInsert, [
                    'product_id' => $item['entity_id'],
                    'website_id' => $websiteId
                ]);
            }
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

        $unitTime = time();
        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_INT, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_int'), $data);
        }
        $this->logger->debug(__("Updated or inserted %1 records in the 'catalog_product_entity_int' table (%2sec).", count($data), time() - $unitTime));

        $unitTime = time();
        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_DECIMAL, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_decimal'), $data);
        }
        $this->logger->debug(__("Updated or inserted %1 records in the 'catalog_product_entity_decimal' table (%2sec).", count($data), time() - $unitTime));

        $unitTime = time();
        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_DATETIME, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_datetime'), $data);
        }
        $this->logger->debug(__("Updated or inserted %1 records in the 'catalog_product_entity_datetime' table (%2sec).", count($data), time() - $unitTime));

        $unitTime = time();
        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_TEXT, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_text'), $data);
        }
        $this->logger->debug(__("Updated or inserted %1 records in the 'catalog_product_entity_text' table (%2sec).", count($data), time() - $unitTime));

        $unitTime = time();
        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_VARCHAR, $attributeTypeEntities)) {
            $connection->insertOnDuplicate($this->getTable('catalog_product_entity_varchar'), $data);
        }
        $this->logger->debug(__("Updated or inserted %1 records in the 'catalog_product_entity_varchar' table (%2sec).", count($data), time() - $unitTime));
    }

    /**
     * @param DataObject $skuEntities
     * @param array $attributeTypeEntities
     */
    public function removeTypeValues(DataObject $skuEntities, array $attributeTypeEntities): void
    {
        $connection = $this->getConnection();

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_INT, $attributeTypeEntities)) {
            $unitTime = time();
            $this->logger->debug("Deleting values (catalog_product_entity_int)");

            $select = $connection->select()->from($this->getTable('catalog_product_entity_int'));
            foreach ($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }

            $this->logQueryExplain($select->deleteFromSelect('catalog_product_entity_int'));
            $connection->query($select->deleteFromSelect('catalog_product_entity_int'));

            $unitTime = time() - $unitTime;
            $unitCount = count($data);
            $this->logger->debug(__("Deleted %1 records (%2sec).", $unitCount, $unitTime));
        }

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_DECIMAL, $attributeTypeEntities)) {
            $unitTime = time();
            $this->logger->debug("Deleting values (catalog_product_entity_decimal)");

            $select = $connection->select()->from($this->getTable('catalog_product_entity_decimal'));
            foreach ($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }
            $this->logQueryExplain($select->deleteFromSelect('catalog_product_entity_decimal'));
            $connection->query($select->deleteFromSelect('catalog_product_entity_decimal'));

            $unitTime = time() - $unitTime;
            $unitCount = count($data);
            $this->logger->debug(__("Deleted %1 records (%2sec).", $unitCount, $unitTime));
        }

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_DATETIME, $attributeTypeEntities)) {
            $unitTime = time();
            $this->logger->debug("Deleting values (catalog_product_entity_datetime)");

            $select = $connection->select()->from($this->getTable('catalog_product_entity_datetime'));
            foreach ($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }

            $this->logQueryExplain($select->deleteFromSelect('catalog_product_entity_datetime'));
            $connection->query($select->deleteFromSelect('catalog_product_entity_datetime'));

            $unitTime = time() - $unitTime;
            $unitCount = count($data);
            $this->logger->debug(__("Deleted %1 records (%2sec).", $unitCount, $unitTime));
        }

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_TEXT, $attributeTypeEntities)) {
            $unitTime = time();
            $this->logger->debug("Deleting values (catalog_product_entity_text)");

            $select = $connection->select()->from($this->getTable('catalog_product_entity_text'));
            foreach ($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }

            $this->logQueryExplain($select->deleteFromSelect('catalog_product_entity_text'));
            $connection->query($select->deleteFromSelect('catalog_product_entity_text'));

            $unitTime = time() - $unitTime;
            $unitCount = count($data);
            $this->logger->debug(__("Deleted %1 records (%2sec).", $unitCount, $unitTime));
        }

        if ($data = $this->fetchTypeValues(ScopeModel::ATTRIBUTE_TYPE_VARCHAR, $attributeTypeEntities)) {
            $unitTime = time();
            $this->logger->debug("Deleting values (catalog_product_entity_varchar)");

            $select = $connection->select()->from($this->getTable('catalog_product_entity_varchar'));
            foreach ($data as $item) {
                $select->orWhere('attribute_id = ' . $item['attribute_id'] . ' AND store_id = ' . $item['store_id'] . ' AND entity_id = ' . $item['entity_id']);
            }

            $this->logQueryExplain($select->deleteFromSelect('catalog_product_entity_varchar'));
            $connection->query($select->deleteFromSelect('catalog_product_entity_varchar'));

            $unitTime = time() - $unitTime;
            $unitCount = count($data);
            $this->logger->debug(__("Deleted %1 records (%2sec).", $unitCount, $unitTime));
        }
    }

    /**
     * @return AbstractDb|void
     */
    public function beginTransaction(): void
    {
        $connection = $this->getConnection();
        $connection->beginTransaction();
    }

    /**
     *
     */
    public function commitTransaction(): void
    {
        $connection = $this->getConnection();
        $connection->commit();
    }

    /**
     * Save time whan attributes were update
     *
     * @param DataObject $skuEntities
     * @param array $updateStatisticAttributes
     * @throws NoSuchEntityException
     */
    public function saveUpdateTimes(DataObject $skuEntities, array $updateStatisticAttributes): void
    {
        if (!$updateStatisticAttributes) {
            return;
        }

        $dateTime = date('Y-m-d H:i:s');
        $storeId = $this->configuration->getStoreId();
        $entityIds = [];
        $attributeIds = [];
        foreach ($skuEntities->getData() as $item) {
            array_push($entityIds, $item['entity_id']);
        }

        foreach ($updateStatisticAttributes as $item) {
            $attributeModel = $this->attributeRepository->get('catalog_product', $item);
            array_push($attributeIds, $attributeModel->getAttributeId());
        }

        $insertOrUpdate = [];
        foreach ($entityIds as $entityId) {
            foreach ($attributeIds as $attributeId) {
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
    protected function fetchTypeValues(string $type, array $attributeTypeEntities): array
    {
        $valuesAgregated = [];
        if (!isset($attributeTypeEntities[$type])) {
            return [];
        }

        foreach ($attributeTypeEntities[$type] as $key=>$item) {
            $valuesAgregated = array_merge($valuesAgregated, $item);
        }

        return $valuesAgregated;
    }

    /**
     * Searching for SKUs by CSV field
     *
     * @param string $attributeCode
     * @param array $object
     * @throws NoSuchEntityException
     */
    public function fillSkusByField(string $attributeCode, array &$object): void
    {
        if (!isset($object[$attributeCode])) {
            throw new Exception('The "' . $attributeCode . '" field in the file document was not found to find sku by the attribute.');
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
        } else {
            array_push($this->statisticFieldSkuSkipped, $fieldValue);
            array_push($this->statisticRowFieldSkuSkipped, $object);
        }
    }

    /**
     * @return array
     */
    public function getStatisticFieldSkuSkipped(): array
    {
        return $this->statisticFieldSkuSkipped;
    }

    /**
     * @return array
     */
    public function getStatisticRowFieldSkuSkipped(): array
    {
        return $this->statisticRowFieldSkuSkipped;
    }

    /**
     * @param DataObject $object
     */
    public function fillSkuEntities(DataObject $object): void
    {
        $skuEntities = $this->getEntities($object->getData());

        $skuEmpty = $object->getData();

        foreach ($skuEntities as $key => $item) {
            unset($skuEmpty[$item['sku']]);
            $object->setData($item['sku'], $item);
        }

        $this->createSkuEntities($object, $skuEmpty);
    }

    /**
     * @param DataObject $object
     * @param array $skuEmpty
     */
    public function createSkuEntities(DataObject $object, array $skuEmpty): void
    {
        if (!$this->configuration->getProductCreateNew() || !$skuEmpty) {
            return;
        }

        $connection = $this->getConnection();
        $select = $connection->select('entity_id')->from($this->getTable('catalog_product_entity'))->order('entity_id DESC')->limit(1);
        $entityIdCounter = (integer) $connection->fetchOne($select);
        $recordsInsert = [];
        foreach ($skuEmpty as $sku => $item) {
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
        foreach ($skuEntities as $key => $item) {
            $object->setData($item['sku'], $item);
        }

        $this->logger->debug("Created " . count($skuEntities) . " new products");
    }

    /**
     * @param string $query
     */
    protected function logQueryExplain(string $query): void
    {
        $connection = $this->getConnection();
        $data = $connection->fetchRow('EXPLAIN ' . $query);
        $out = '';

        foreach ($data as $key=>$item) {
            $out .= "{$key}: {$item}\n";
        }
        $this->logger->debug('EXPLAIN ' . substr($query, 0, 100) . "...\n" . $out);
    }
}
