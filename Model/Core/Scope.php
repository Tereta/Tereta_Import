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

namespace Tereta\Import\Model\Core;

use Exception;

use Magento\Catalog\Model\Product as ProductModel;
use Magento\Catalog\Model\ResourceModel\Eav\Attribute as EavAttribute;
use Magento\Eav\Api\AttributeOptionManagementInterface;
use Magento\Eav\Api\Data\AttributeOptionInterfaceFactory;
use Magento\Eav\Api\Data\AttributeOptionLabelInterfaceFactory;
use Magento\Eav\Model\AttributeRepository;
use Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend;
use Magento\Eav\Model\Entity\Attribute\Source\Boolean as SourceBoolean;
use Magento\Eav\Model\Entity\Attribute\Source\Table as SourceTable;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\DataObject;
use Magento\Framework\DataObjectFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Filesystem\File\Write as FileWrite;
use Magento\Framework\Filesystem\Io\File as IoFile;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;

use Tereta\Import\Helper\Data as HelperData;
use Tereta\Import\Model\Core\Scope\AttributeSetFactory;
use Tereta\Import\Model\Core\Scope\ExtensionFactory;
use Tereta\Import\Model\Logger;
use Tereta\Import\Model\ResourceModel\Core\Scope as ScopeResource;
use Tereta\Import\Model\ResourceModel\Core\ScopeFactory as ScopeResourceFactory;

/**
 * Tereta\Import\Model\Core\Scope
 *
 * Class Scope
 * @package Tereta\Import\Model\Core
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Scope extends AbstractModel
{
    const ATTRIBUTE_TYPE_INT      = 'int';
    const ATTRIBUTE_TYPE_DECIMAL  = 'decimal';
    const ATTRIBUTE_TYPE_DATETIME = 'datetime';
    const ATTRIBUTE_TYPE_TEXT     = 'text';
    const ATTRIBUTE_TYPE_VARCHAR  = 'varchar';

    /**
     * @var DataObject
     */
    protected $mapAttributes;

    /**
     * @var AttributeRepository
     */
    protected $attributeRepository;

    /**
     * @var array
     */
    protected $attributeModels = [];

    /**
     * @var array
     */
    protected $attributeTypes = [];

    /**
     * @var array
     */
    protected $attributeOptions = [];

    /**
     * @var array
     */
    protected $attributeOptionsReverce = [];

    /**
     * @var
     */
    protected $logger;

    /**
     * @var DataObject
     */
    protected $skuEntities;

    /**
     * @var array
     */
    protected $_attributeTypeEntities = [];

    /**
     * @var array
     */
    protected $_attributeTypeEntitiesRemove = [];

    /**
     * @var DataObjectFactory
     */
    protected $_dataObjectFactory;

    /**
     * @var AttributeOptionLabelInterfaceFactory
     */
    protected $_optionLabelFactory;

    /**
     * @var AttributeOptionInterfaceFactory
     */
    protected $_optionFactory;

    /**
     * @var AttributeOptionManagementInterface
     */
    protected $_attributeOptionManagement;

    /**
     * @var DataObject|null
     */
    protected $configuration = null;

    /**
     * @var bool
     */
    protected $_collected = false;

    /**
     * @var AttributeSetFactory
     */
    protected $attributeSet;

    /**
     * @var
     */
    protected $extension;

    /**
     * @var Stock
     */
    protected $stock;

    /**
     * @var
     */
    protected $media;

    /**
     * @var
     */
    protected $category;

    /**
     * @var DirectoryList
     */
    protected $directoryList;

    /**
     * @var IoFile
     */
    protected $ioFile;

    /**
     * @var array
     */
    protected $attributeModelsById = [];

    /**
     * @var ScopeResource
     */
    protected $scopeResource;

    /**
     * @var FileWrite
     */
    protected $logSkippedRecordCsv;

    /**
     * @var HelperData
     */
    protected $helperData;

    public function __construct(
        HelperData $helperData,
        Context $context,
        Registry $registry,
        ScopeResourceFactory $scopeResourceFactory,
        DataObjectFactory $dataObjectFactory,
        AttributeRepository $attributeRepository,
        AttributeOptionLabelInterfaceFactory $optionLabelFactory,
        AttributeOptionInterfaceFactory $optionFactory,
        AttributeOptionManagementInterface $attributeOptionManagement,
        DataObject $configuration,
        Logger $logger,
        AttributeSetFactory $attributeSetFactory,
        ExtensionFactory $extensionFactory,
        DirectoryList $directoryList,
        IoFile $ioFile,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);

        $this->helperData = $helperData;

        $this->logger = $logger;

        $this->directoryList = $directoryList;
        $this->ioFile = $ioFile;

        $this->attributeSet = $attributeSetFactory->create(['configuration'=>$configuration]);

        $this->extension = $extensionFactory->create(['configuration'=>$configuration, 'logger'=>$logger]);

        $this->_dataObjectFactory = $dataObjectFactory;
        $this->_optionLabelFactory = $optionLabelFactory;
        $this->_optionFactory = $optionFactory;

        $this->_attributeOptionManagement = $attributeOptionManagement;

        $this->attributeRepository = $attributeRepository;

        $this->mapAttributes = $dataObjectFactory->create();
        $this->mapAttributes->addData($configuration->getMappingAttributeObject()->getData());

        $this->skuEntities = $dataObjectFactory->create();

        $this->configuration = $configuration;

        $this->_prepareAttributes($configuration->getData('fields'));

        $this->scopeResource = $scopeResourceFactory->create();
        $this->scopeResource->setLogger($logger)->setConfiguration($configuration);
    }

    /**
     * @return ScopeResource
     */
    public function getResource(): ScopeResource
    {
        return $this->scopeResource;
    }

    /**
     *
     */
    protected function _construct(): void
    {
        $this->_init(ScopeResource::class);
    }

    /**
     * @param array $csvData
     * @throws LocalizedException
     */
    public function collectItem(array $csvData): void
    {
        // Convert mapped fields
        $dataObject = $this->_dataObjectFactory->create();

        foreach ($csvData as $key=>$item) {
            if (!trim($key)) {
                continue;
            }

            if (in_array($key, $this->configuration->getSkipDocumentFieldsObject()->getData())) {
                continue;
            }

            if (!is_string($item) && !is_null($item) && !is_numeric($item) && !is_bool($item)) {
                $this->logger->debug(
                    __(
                        'Warning: field "%1" is not proccessable value for the product (%2)',
                        $key,
                        print_r($item, true)
                    )
                );
                $item = '';
            }

            foreach ($this->getMapAttribute(trim($key)) as $mappedAttribute) {
                $dataObject->setData($mappedAttribute, trim($item));
            }
        }

        // Visibility and Status from configurations
        if (!$dataObject->hasData('visibility') && $this->configuration->getData('products_visibility')) {
            $dataObject->setData('visibility', $this->configuration->getData('products_visibility'));
        }

        if ($dataObject->hasData('status') && $this->configuration->getData('products_is_enabled')) {
            $dataObject->setData('status', $this->configuration->getData('products_is_enabled'));
        }

        $this->_eventManager->dispatch('tereta_import_scope_modify_data', [
            'data_object' => $dataObject,
            'model_import' => $this->configuration
        ]);

        $data = $dataObject->getData();

        // Collect data
        // Search by field
        $searchByField = ($this->configuration->getData('product_search_by_field') && !$this->configuration->getData('product_create_new'));
        if (!$searchByField && !isset($csvData[$this->getRevertedMapAttribute('sku')])) {
            throw new LocalizedException(__('SKU field in the document can not be found'));
        }

        if ($searchByField) {
            try {
                $this->getResource()->fillSkusByField($this->configuration->getData('product_search_by_field'), $data);
            } catch (Exception $e) {
                $this->logger->warning($e->getMessage());
                $this->logSkippedRecordCsv($csvData);

                throw $e;
            }
        }

        // Collect
        $this->_collected = true;
        $sku = trim($this->getValue('sku', $data));

        if (!$sku) {
            return;
        }

        $this->skuEntities->setData($sku, null);

        // Appennd classes collected
        $this->extension->collect($data);

        $this->collectTypeValues(static::ATTRIBUTE_TYPE_INT, $data);
        $this->collectTypeValues(static::ATTRIBUTE_TYPE_DECIMAL, $data);
        $this->collectTypeValues(static::ATTRIBUTE_TYPE_DATETIME, $data);
        $this->collectTypeValues(static::ATTRIBUTE_TYPE_TEXT, $data);
        $this->collectTypeValues(static::ATTRIBUTE_TYPE_VARCHAR, $data);
    }

    protected function logSkippedRecordCsv($object): void
    {
        if (!$this->configuration->getData('log_not_existing_records')) {
            return;
        }

        if (!$this->logSkippedRecordCsv) {
            $this->logSkippedRecordCsv = $this->helperData->getSkippedCsvWriteFile($this->configuration->getData('identifier'));
            $this->logSkippedRecordCsv->writeCsv(array_keys($object));
        }

        $this->logSkippedRecordCsv->writeCsv($object);
    }

    /**
     * @param string $fieldLabel
     * @return array|null
     */
    protected function getMapAttribute(string $fieldLabel): ?array
    {
        $fieldLabel = trim($fieldLabel);
        if (!$fieldLabel) {
            return null;
        }
        $attributeCode = $this->mapAttributes->getData($fieldLabel);

        if (!$attributeCode) {
            $attributeCode = [$fieldLabel];
        } elseif (is_string($attributeCode)) {
            $attributeCode = [$attributeCode];
        }

        return $attributeCode;
    }

    /**
     * @param string $attributeCode
     * @return string
     */
    protected function getRevertedMapAttribute(string $attributeCode): string
    {
        $mapping = array_flip($this->mapAttributes->getData());
        if (isset($mapping[$attributeCode])) {
            return $mapping[$attributeCode];
        }

        return $attributeCode;
    }

    /**
     * @return bool
     */
    public function isCollected(): bool
    {
        return $this->_collected;
    }

    /**
     * Save all values
     */
    public function save(): void
    {
        if (!$this->_collected) {
            return;
        }

        try {
            $this->logger->debug('Save starting...');

            $updateStatisticAttributes = $this->extension->getUpdateStatisticAttributes();

            $debugTime = time();
            $this->getResource()->fillSkuEntities($this->skuEntities);
            $this->logger->debug(__('Fill IDS for entities (%1sec).', (time() - $debugTime)));

            $this->extension->fillEntityIds($this->skuEntities);

            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_INT);
            $this->logger->debug(__('Fill IDS for the INT type (%1sec).', (time() - $debugTime)));

            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_DECIMAL);
            $this->logger->debug(__('Fill IDS for the DECIMAL type (%1sec).', (time() - $debugTime)));
            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_DATETIME);
            $this->logger->debug(__('Fill IDS for the DATETIME type (%1sec)', (time() - $debugTime)));
            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_TEXT);
            $this->logger->debug(__('Fill IDS for the TEXT type (%1sec).', (time() - $debugTime)));
            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_VARCHAR);
            $this->logger->debug(__('Fill IDS for the VARCHAR type (%1sec).', (time() - $debugTime)));

            $this->logger->debug('DB transaction begin...');
            $this->getResource()->beginTransaction();

            $debugTime = time();
            $this->getResource()->saveTypeValues($this->skuEntities, $this->_attributeTypeEntities);
            $this->logger->debug(__('Save values (%1sec).', (time() - $debugTime)));

            $debugTime = time();
            $this->getResource()->removeTypeValues($this->skuEntities, $this->_attributeTypeEntitiesRemove);
            $this->logger->debug(__('Remove values (%1sec).', (time() - $debugTime)));

            $debugTime = time();
            $this->getResource()->saveEntityWebsite($this->skuEntities);
            $this->logger->debug(__('Remove values (%1sec).', (time() - $debugTime)));

            $this->extension->save();

            $debugTime = time();
            $this->logger->debug(__('DB transaction commit...'));
            $this->getResource()->commitTransaction();
            $this->logger->debug(__('DB transaction has beed commited (%1sec).', (time() - $debugTime)));

            // Save update time on main table and for append value tables
            $this->getResource()->saveUpdateTimes($this->skuEntities, $updateStatisticAttributes);

            $this->logger->debug(__('DB transaction begin...'));
            $this->getResource()->beginTransaction();

            $this->extension->saveAfter();

            $this->logger->debug(__('DB transaction commit...'));
            $this->getResource()->commitTransaction();
            $this->logger->debug(__('DB transaction has beed commited (%1sec).', (time() - $debugTime)));

            // Indexation common indexes
            $this->configuration->flushProductsToReindex();
            foreach ($this->skuEntities->getData() as $item) {
                $this->configuration->addProductToReindex($item['entity_id']);
            }

            $this->configuration->addIndexToReindex($this->extension->getIndexer());
        } catch (\Exception $e) {
            $this->logger->error(
                __("SKUs: ('%1'); Error message: %2", implode("','", array_keys($this->skuEntities->getData())), $e->getMessage())
            );
            $this->logger->debug(
                __('Exception Throw: %1:%2', $e->getFile(), $e->getLine())
            );
            $this->logger->debug(__('Exception Trace: %1', $e->getTraceAsString()));
        }
    }

    /**
     * @param array $csvFields
     * @return $this
     */
    protected function _prepareAttributes(array $csvFields): self
    {
        $skipAttributes = $this->extension->getSkipAttributes();

        $attributes = [];
        foreach ($csvFields as $csvField) {
            if (in_array($csvField, $this->configuration->getSkipDocumentFieldsObject()->getData())) {
                continue;
            }

            $mappedAttributes = $this->getMapAttribute($csvField);
            if (!$mappedAttributes) {
                continue;
            }

            foreach ($mappedAttributes as $mappedAttribute) {
                array_push($attributes, $mappedAttribute);
            }
        }

        $attributes = array_merge($attributes, $this->extension->getIncludeAttributes());

        // NEED TO USE CONFIGURATION FOR THIS
        $attributes = array_merge($attributes, ['visibility', 'status']);

        $attributesLoaded = [];
        $attributesLoadedById = [];
        foreach ($attributes as $attributeCode) {
            if (in_array($attributeCode, $skipAttributes)) {
                continue;
            }

            try {
                $attributesLoaded[$attributeCode] = $this->attributeRepository->get(ProductModel::ENTITY, $attributeCode);
                $attributesLoaded[$attributeCode]->setStoreId(0);
                $attributesLoadedById[$attributesLoaded[$attributeCode]->getAttributeId()] = &$attributesLoaded[$attributeCode];

                $attributeType = $attributesLoaded[$attributeCode]->getBackendType();
                if (!isset($this->attributeTypes[$attributeType])) {
                    $this->attributeTypes[$attributeType] = [];
                }
                array_push($this->attributeTypes[$attributeType], $attributeCode);

                $this->_prepareAttributesOptions($attributesLoaded[$attributeCode]);
            } catch (\Exception $e) {
                $this->logger->warning($e->getMessage());
            }
        }

        $this->attributeModels = $this->_dataObjectFactory->create()->setData($attributesLoaded);
        $this->attributeModelsById = $this->_dataObjectFactory->create()->setData($attributesLoadedById);

        return $this;
    }

    /**
     * Preparing attribute options for loaded attributes
     *
     * @param EavAttribute $attribute
     * @throws LocalizedException
     */
    protected function _prepareAttributesOptions(EavAttribute $attribute): void
    {
        $isSourceModel = ($attribute->getSourceModel() instanceof SourceTable);
        $isInput = in_array($attribute->getData('frontend_input'), ['select', 'multiselect', 'boolean']);
        if (!$isSourceModel && !$isInput) {
            return;
        }

        if ($this->prepareSpecificAttributesOptions($attribute)) {
            return;
        }

        $optionsData = $this->_dataObjectFactory->create();
        $optionsDataReverce = $this->_dataObjectFactory->create();

        foreach ($attribute->getSource()->getAllOptions() as $item) {
            if (!$item['value'] && $item['value'] !== 0) {
                continue;
            }
            $optionsData->setData($item['value'], $item['label']);

            $optionsDataReverce->setData(urlencode((string)$item['label']), $item['value']);
            $optionsDataReverce->setData(urlencode(strtolower((string)$item['label'])), $item['value']);
        }

        $this->attributeOptionsReverce[$attribute->getAttributeCode()] = $optionsDataReverce;
        $this->attributeOptions[$attribute->getAttributeCode()] = $optionsData;
    }

    /**
     * Prepare values for specific attributes eg, visibility, status, etc...
     *
     * @param EavAttribute $attribute
     * @return bool
     * @throws LocalizedException
     */
    protected function prepareSpecificAttributesOptions(EavAttribute $attribute): bool
    {
        $optionsData = $this->_dataObjectFactory->create();
        $optionsDataReverce = $this->_dataObjectFactory->create();

        $isSpecial = in_array($attribute->getAttributeCode(), ['visibility', 'status']);
        $isBoolean = ($attribute->getSource() instanceof SourceBoolean);

        if (!$isSpecial && !$isBoolean) {
            return false;
        }

        foreach ($attribute->getSource()->getAllOptions() as $option) {
            $optionsData->setData($option['value'], (string) $option['label']);
            $optionsDataReverce->setData((string) $option['label'], $option['value']);
            $optionsDataReverce->setData((string) $option['value'], $option['value']);
        }

        switch ($attribute->getAttributeCode()) {
            case('status'):
                $optionsDataReverce->setData([]);
                $optionsDataReverce->setData('enabled', $attribute->getSource()::STATUS_ENABLED);
                $optionsDataReverce->setData('on', $attribute->getSource()::STATUS_ENABLED);
                $optionsDataReverce->setData('true', $attribute->getSource()::STATUS_ENABLED);
                $optionsDataReverce->setData('yes', $attribute->getSource()::STATUS_ENABLED);
                $optionsDataReverce->setData('disabled', $attribute->getSource()::STATUS_DISABLED);
                $optionsDataReverce->setData('off', $attribute->getSource()::STATUS_DISABLED);
                $optionsDataReverce->setData('false', $attribute->getSource()::STATUS_DISABLED);
                $optionsDataReverce->setData('no', $attribute->getSource()::STATUS_DISABLED);
                $optionsDataReverce->setData($attribute->getSource()::STATUS_ENABLED, $attribute->getSource()::STATUS_ENABLED);
                $optionsDataReverce->setData($attribute->getSource()::STATUS_DISABLED, $attribute->getSource()::STATUS_DISABLED);
                break;
            case('visibility'):
                $optionsDataReverce->setData('invisible', $attribute->getSource()::VISIBILITY_NOT_VISIBLE);
                $optionsDataReverce->setData('not visible', $attribute->getSource()::VISIBILITY_NOT_VISIBLE);
                $optionsDataReverce->setData('hide', $attribute->getSource()::VISIBILITY_NOT_VISIBLE);
                $optionsDataReverce->setData('hidden', $attribute->getSource()::VISIBILITY_NOT_VISIBLE);
                $optionsDataReverce->setData('in catalog', $attribute->getSource()::VISIBILITY_IN_CATALOG);
                $optionsDataReverce->setData('in search', $attribute->getSource()::VISIBILITY_IN_SEARCH);
                $optionsDataReverce->setData('catalog', $attribute->getSource()::VISIBILITY_IN_CATALOG);
                $optionsDataReverce->setData('search', $attribute->getSource()::VISIBILITY_IN_SEARCH);
                $optionsDataReverce->setData('both', $attribute->getSource()::VISIBILITY_BOTH);
                $optionsDataReverce->setData('all', $attribute->getSource()::VISIBILITY_BOTH);
                $optionsDataReverce->setData('everywhere', $attribute->getSource()::VISIBILITY_BOTH);
                $optionsDataReverce->setData($attribute->getSource()::VISIBILITY_NOT_VISIBLE, $attribute->getSource()::VISIBILITY_NOT_VISIBLE);
                $optionsDataReverce->setData($attribute->getSource()::VISIBILITY_IN_CATALOG, $attribute->getSource()::VISIBILITY_IN_CATALOG);
                $optionsDataReverce->setData($attribute->getSource()::VISIBILITY_IN_SEARCH, $attribute->getSource()::VISIBILITY_IN_SEARCH);
                $optionsDataReverce->setData($attribute->getSource()::VISIBILITY_BOTH, $attribute->getSource()::VISIBILITY_BOTH);
                break;
            default:
                $optionsDataReverce->setData('yes', $attribute->getSource()::VALUE_YES);
                $optionsDataReverce->setData('no', $attribute->getSource()::VALUE_NO);
                $optionsDataReverce->setData('on', $attribute->getSource()::VALUE_YES);
                $optionsDataReverce->setData('off', $attribute->getSource()::VALUE_NO);
                $optionsDataReverce->setData('true', $attribute->getSource()::VALUE_YES);
                $optionsDataReverce->setData('false', $attribute->getSource()::VALUE_NO);
                $optionsDataReverce->setData(1, $attribute->getSource()::VALUE_YES);
                $optionsDataReverce->setData(0, $attribute->getSource()::VALUE_NO);
                break;
        }

        $this->attributeOptionsReverce[$attribute->getAttributeCode()] = $optionsDataReverce;
        $this->attributeOptions[$attribute->getAttributeCode()] = $optionsData;
        return true;
    }

    /**
     * Clean wrong symbols for data type
     *
     * @param string $attributeType
     * @param string|null $value
     * @return string|null
     */
    protected function clearValue(string $attributeType, ?string $value): ?string
    {
        switch ($attributeType) {
            case('decimal'):
                $value = str_replace(",", ".", $value);
                $value = preg_replace("/[^0-9\.]/", "", $value);
                $valueExploded = explode(".", $value);
                if (count($valueExploded) > 1) {
                    $cents = array_pop($valueExploded);
                    $value = implode("", $valueExploded);
                    $value .= '.' . $cents;
                }
        }

        return $value;
    }

    /**
     * @param string $attributeType
     * @param array $data
     */
    protected function collectTypeValues(string $attributeType, array $data): void
    {
        if (!$this->getValue('sku', $data)) {
            $this->logger->debug('Tying to find ID for SKU: SKU not found');
            return;
        }

        $productSku = $data['sku'];

        if (!isset($this->attributeTypes[$attributeType])) {
            return;
        }

        $storeId = $this->configuration->getStoreId();

        foreach ($this->attributeTypes[$attributeType] as $attributeCode) {
            if (!isset($data[$attributeCode])) {
                continue;
            }

            $value = trim($data[$attributeCode]);
            if ($value === '') {
                $value = null;
            }

            $value = $this->clearValue($attributeType, $value);

            if (is_null($value) && in_array($attributeCode, $this->configuration->getClearEmptyAttributesObject()->getData())) {
                $remove = [
                    'attribute_id' => $this->attributeModels->getData($attributeCode)->getId(),
                    'store_id' => $storeId,
                    'entity_id' => null
                ];

                if (!isset($this->_attributeTypeEntitiesRemove[$attributeType])) {
                    $this->_attributeTypeEntitiesRemove[$attributeType] = [];
                }

                if (!isset($this->_attributeTypeEntitiesRemove[$attributeType][$productSku])) {
                    $this->_attributeTypeEntitiesRemove[$attributeType][$productSku] = [];
                }

                array_push($this->_attributeTypeEntitiesRemove[$attributeType][$productSku], $remove);

                continue;
            }

            $skipEmptyAttributesObject = $this->configuration->getSkipEmptyAttributesObject()->getData();

            if (is_null($value) && in_array($attributeCode, $skipEmptyAttributesObject)) {
                continue;
            }

            $this->collectTypeValuesProcessOptions($attributeCode, $value);

            if (!isset($this->_attributeTypeEntities[$attributeType])) {
                $this->_attributeTypeEntities[$attributeType] = [];
            }

            if (!isset($this->_attributeTypeEntities[$attributeType][$productSku])) {
                $this->_attributeTypeEntities[$attributeType][$productSku] = [];
            }

            if (!is_array($value)) {
                $value = [$value];
            }

            foreach ($value as $valueItem) {
                $insert = [
                    'attribute_id' => $this->attributeModels->getData($attributeCode)->getId(),
                    'store_id' => $storeId,
                    'entity_id' => null,
                    'value' => $valueItem
                ];

                array_push($this->_attributeTypeEntities[$attributeType][$productSku], $insert);
            }
        }
    }

    /**
     * @param string $attributeCode
     * @param $value
     * @throws Exception
     */
    protected function collectTypeValuesProcessOptions(string $attributeCode, &$value): void
    {
        if (!$value || !isset($this->attributeOptions[$attributeCode]) || !isset($this->attributeOptionsReverce[$attributeCode])) {
            return;
        }

        $this->attributeOptions[$attributeCode];
        $this->attributeOptionsReverce[$attributeCode];

        $this->collectTypeValuesAddOptions($attributeCode, $value);
    }

    protected $multiSelectSeparator = ';';

    /**
     * @param string $attributeCode
     * @param string $value
     * @throws Exception
     */
    protected function collectTypeValuesAddOptions(string $attributeCode, string &$sourceValue): void
    {
        $attributeModel = $this->attributeModels->getData($attributeCode);

        if ($attributeModel->getFrontendInput() == 'multiselect') {
            $values = explode($this->multiSelectSeparator, $sourceValue);
        } else {
            $values = [$sourceValue];
        }

        $valueResult = [];
        foreach ($values as $key => $valueItem) {
            $valueItemEncoded = urlencode(strtolower($valueItem));
            if (isset($this->attributeOptionsReverce[$attributeCode]) && $this->attributeOptionsReverce[$attributeCode]->hasData($valueItemEncoded)) {
                $valueResult[$key] = $this->attributeOptionsReverce[$attributeCode]->getData($valueItemEncoded);
                continue;
            }

            if (!$this->configuration->getCreateNewOptions()) {
                $valueResult[$key] = null;
                continue;
            }

            if (!$attributeModel->getSource() instanceof SourceTable) {
                $valueResult[$key] = null;
                continue;
            }

            $storeId = $this->configuration->getStoreId();

            $optionLabel = $this->_optionLabelFactory->create();
            $optionLabel->setStoreId($storeId);
            $optionLabel->setLabel($valueItem);

            $option = $this->_optionFactory->create();
            $option->setLabel($valueItem);
            $option->setStoreLabels([$optionLabel]);
            $option->setSortOrder(0);
            $option->setIsDefault(false);

            try {
                $this->_attributeOptionManagement->add(
                    \Magento\Catalog\Model\Product::ENTITY,
                    $attributeModel->getAttributeId(),
                    $option
                );
            } catch (Exception $e) {
                throw $e;
            }

            $attributeModel = $this->attributeRepository->get(ProductModel::ENTITY, $attributeCode);
            $optionId = null;
            foreach ($attributeModel->getSource()->getAllOptions() as $item) {
                if ($item['label'] == $valueItem) {
                    $optionId = $item['value'];
                }
            }

            $this->attributeOptions[$attributeCode]->setData((integer)$optionId, $valueItem);
            $this->attributeOptionsReverce[$attributeCode]->setData(urlencode($valueItem), $optionId);
            $this->attributeOptionsReverce[$attributeCode]->setData(urlencode(strtolower($valueItem)), $optionId);

            array_push($valueResult, $optionId);
        }

        if ($attributeModel->getBackendModel() == ArrayBackend::class) {
            $valueResult = [implode(',', $valueResult)];
        }

        $sourceValue = $valueResult;
    }

    /**
     * @param string $attributeType
     */
    protected function _fillAttributeTypeEntityIds(string $attributeType): void
    {
        if (!isset($this->attributeTypes[$attributeType]) || !$this->attributeTypes[$attributeType]) {
            return;
        }

        // Fill created ids and check values
        $skuArray = &$this->_attributeTypeEntities[$attributeType];
        if ($skuArray) {
            foreach ($skuArray as $sku => $item) {
                $skuData = $this->skuEntities->getData($sku);
                if (!$skuData) {
                    unset($skuArray[$sku]);
                    continue;
                }
                foreach ($skuArray[$sku] as $key => $item) {
                    if (!$this->attributeSet->isAllowedAttribute($skuData['attribute_set_id'], $item['attribute_id'])) {
                        $this->logger->warning('The "' . $this->attributeModelsById->getData($item['attribute_id'])->getAttributeCode() . '" attribute is not present in the #' . $skuData['attribute_set_id'] . '# attribute set');
                        unset($skuArray[$sku][$key]);
                        continue;
                    }
                    $skuArray[$sku][$key]['entity_id'] = $skuData['entity_id'];
                }
            }
        }

        // Removing types values
        $skuArray = &$this->_attributeTypeEntitiesRemove[$attributeType];
        if ($skuArray) {
            foreach ($skuArray as $sku => $item) {
                $skuData = $this->skuEntities->getData($sku);
                if (!$skuData) {
                    unset($skuArray[$sku]);
                    continue;
                }
                foreach ($skuArray[$sku] as $key => $item) {
                    $skuArray[$sku][$key]['entity_id'] = $skuData['entity_id'];
                }
            }
        }
    }

    /**
     * @param string $key
     * @param array $array
     * @return string|null
     */
    protected function getValue(string $key, array $array): ?string
    {
        if (!isset($array[$key])) {
            return null;
        }

        return $array[$key];
    }
}
