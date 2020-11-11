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

use Magento\Eav\Api\AttributeRepositoryInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\LocalizedException;

/**
 * Tereta\Import\Model\ResourceModel\Core\Scope\Url
 *
 * Class Url
 * @package Tereta\Import\Model\ResourceModel\Core\Scope
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Url extends AbstractDb
{
    /**
     * @var array
     */
    protected $collectedData = [];

    /**
     * @var array
     */
    protected $entityIds = [];

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Eav\Attribute
     */
    protected $urlKeyAttribute;

    /**
     * @var AttributeRepositoryInterface
     */
    protected $attributeRepository;

    /**
     *
     */
    protected function _construct(): void
    {
        $this->_init('url_rewrite', 'url_rewrite_id');
    }

    /**
     * Url constructor.
     * @param AttributeRepositoryInterface $attributeRepository
     * @param StoreManagerInterface $storeManager
     * @param ScopeConfigInterface $scopeConfig
     * @param Context $context
     * @param null $connectionName
     */
    public function __construct(
        AttributeRepositoryInterface $attributeRepository,
        StoreManagerInterface $storeManager,
        ScopeConfigInterface $scopeConfig,
        Context $context,
        $connectionName = null
    ) {
        $this->attributeRepository = $attributeRepository;
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;

        parent::__construct($context, $connectionName);
    }

    /**
     * @param array $data
     */
    public function collect(array $data): void
    {
        if (!isset($data['sku']) || !($sku = $data['sku']) || !isset($data['url_key']) || !$data['url_key']) {
            return;
        }

        $collectedDataItem = [
            'entity_id' => null,
            'url_key' => $data['url_key'],
            'sku' => $sku
        ];

        $this->collectedData[$sku] = $collectedDataItem;
    }

    public function fillEntityIds($skuEntities): void
    {
        foreach ($this->collectedData as $key => $item) {
            $sku = $item['sku'];

            if ($skuData = ($sku ? $skuEntities->getData($sku) : null)) {
                $this->collectedData[$key]['entity_id'] = $skuData['entity_id'];
                array_push($this->entityIds, $skuData['entity_id']);
            }
        }
    }

    /**
     * @throws NoSuchEntityException
     */
    public function saveUrl(): void
    {
        if (!$this->configuration->getUpdateUrlRewrites()) {
            return;
        }

        $this->urlKeyAttribute = $this->attributeRepository->get('catalog_product', 'url_key');

        if ($this->configuration->getStoreId()) {
            $this->saveStoreUrls($this->configuration->getStoreId());
        } else {
            foreach ($this->storeManager->getStores() as $storeModel) {
                $this->saveStoreUrls($storeModel->getStoreId());
            }
        }
    }

    /**
     * @param int $storeId
     * @throws LocalizedException
     */
    public function saveStoreUrls(int $storeId): void
    {
        if (!$storeId) {
            return;
        }

        $connection = $this->getConnection();

        $urlKeyTable = $this->getTable('catalog_product_entity_' . $this->urlKeyAttribute->getBackendType());

        $select = $connection->select()->from(['main' => $urlKeyTable]);
        $select->where("main.store_id = 0");
        $select->where("main.attribute_id = ?", $this->urlKeyAttribute->getAttributeId());
        $select->where('main.entity_id IN (?)', $this->entityIds);
        $select->joinLeft(
            ['store_table' => $urlKeyTable],
            'main.entity_id = store_table.entity_id AND main.attribute_id = store_table.attribute_id AND store_table.store_id = ' . $storeId,
            ['store_value' => 'store_table.value']
        );

        $urlKeyValues = $connection->fetchAll($select);

        $insertRecords = [];
        $updateRecords = [];
        $deleteRecords = [];

        foreach ($urlKeyValues as $item) {
            $value = $item['value'];
            if (!is_null($item['store_value'])) {
                $item['value'] = $item['store_value'];
            }
            $insertRecords[$item['entity_id']] = [
                'entity_type' => 'product',
                'entity_id' => $item['entity_id'],
                'request_path' => $this->getUrl($item['value']), // UNIQUE KEY
                'target_path' => 'catalog/product/view/id/' . $item['entity_id'],
                'redirect_type' => 0,
                'store_id' => $storeId, // UNIQUE KEY
                'description' => null,
                'is_autogenerated' => 1,
                'metadata' => null
            ];
        }

        $select = $connection->select()->from($this->getMainTable());
        $select->where("entity_type = 'product'");
        $select->where("redirect_type = 0");
        $select->where("is_autogenerated = 1");
        $select->where("store_id = ?", $storeId);
        $select->where("entity_id IN (?)", array_keys($insertRecords));
        $recordsInDb = $connection->fetchAll($select);

        $insertRecordsFull = $insertRecords;

        foreach ($recordsInDb as $item) {
            $entityId = $item['entity_id'];

            //if ($item['metadata'] !== null) {
            //    array_push($deleteRecords, $item['url_rewrite_id']);
            //    continue;
            //}
            $insertRecordItem = $insertRecordsFull[$entityId];

            if ($this->isRecordExists($item, $insertRecordItem)) {
                unset($insertRecords[$entityId]);
            } else {
                $updateRecords[$item['url_rewrite_id']] = $item;
                $updateRecords[$item['url_rewrite_id']]['target_path'] = $insertRecordItem['request_path'];
                $updateRecords[$item['url_rewrite_id']]['redirect_type'] = '301';
            }
        }

        if ($updateRecords) {
            $connection->insertOnDuplicate($this->getTable('url_rewrite'), array_values($updateRecords));
        }
        $this->logger->debug(__("Update %1 records into the 'url_rewrite' table for the #%2 store.", count($updateRecords), $storeId));

        if ($insertRecords) {
            $connection->insertOnDuplicate($this->getTable('url_rewrite'), array_values($insertRecords));
        }
        $this->logger->debug(__("Insert %1 records into the 'url_rewrite' table for the #%2 store.", count($insertRecords), $storeId));

        if ($deleteRecords) {
            $selectDelete = $connection->select()->from($this->getTable('url_rewrite'))->where('url_rewrite_id IN (?)', $deleteRecords);
            $connection->deleteFromSelect($selectDelete, $this->getTable('url_rewrite'));
        }
        $this->logger->debug(__("Delete %1 records into the 'url_rewrite' table for the #%2 store.", count($deleteRecords), $storeId));
    }

    /**
     * @param array $itemExists
     * @param array $insertUpdateRecordItem
     * @return bool
     */
    protected function isRecordExists(array $itemExists, array $insertUpdateRecordItem): bool
    {
        $return = true;
        foreach ($itemExists as $key=>$value) {
            if ($key != "url_rewrite_id" && !array_key_exists($key, $insertUpdateRecordItem)) {
                $return = false;
                break;
            }

            if ($key != "url_rewrite_id" && $insertUpdateRecordItem[$key] != $value) {
                $return = false;
                break;
            }
        }

        foreach ($insertUpdateRecordItem as $key=>$item) {
            if ($key != "url_rewrite_id" && !array_key_exists($key, $itemExists)) {
                $return = false;
                break;
            }
        }

        return $return;
    }

    /**
     * @param string $urlKey
     * @return string
     */
    protected function getUrl(string $urlKey): string
    {
        if ($urlSuffix = $this->scopeConfig->getValue('catalog/seo/category_url_suffix')) {
            $urlKey = $urlKey . $urlSuffix;
        }

        return $urlKey;
    }
}
