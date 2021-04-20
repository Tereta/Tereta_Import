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
use Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend;
use Magento\Eav\Model\Entity\Attribute\Source\Boolean as SourceBoolean;
use Magento\Eav\Model\Entity\Attribute\Source\Table as SourceTable;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\AbstractResource;

use Tereta\Import\Model\ResourceModel\Core\Scope as ScopeResource;
use Tereta\Import\Model\Core\Scope\Context as ImportContext;
use Tereta\Import\Model\Logger;

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
     * @var DataObject|null
     */
    protected $configuration = null;

    /**
     * @var bool
     */
    protected $_collected = false;

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
     * @var array
     */
    protected $attributeModelsById = [];

    /**
     * @var ScopeResource
     */
    protected $scopeResource;

    /**
     * @var string
     */
    protected $multiSelectSeparator = ';';

    protected $logger;

    /**
     * Scope constructor.
     * @param Logger $logger
     * @param ImportContext $importContext
     * @param DataObject $configuration
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        Logger $logger,
        ImportContext $importContext,
        DataObject $configuration = null,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->importContext = $importContext;
        $this->logger = $logger;

        parent::__construct(
            $importContext->getContext(),
            $importContext->getRegistry(),
            $resource,
            $resourceCollection,
            $data
        );

        if (!$configuration) {
            $configuration = $importContext->getDataObjectFactory()->create();
        }

        $this->attributeSet = $importContext->getAttributeSetFactory()->create(['configuration'=>$configuration]);

        $this->extension = $importContext->getExtensionFactory()->create(['configuration'=>$configuration, 'logger'=>$this->logger]);

        $this->skuEntities = $importContext->getDataObjectFactory()->create();

        $this->configuration = $configuration;

        $this->scopeResource = $importContext->getScopeResourceFactory()->create()
            ->setLogger($this->logger)->setConfiguration($configuration);

        $this->attributeModels = $importContext->getDataObjectFactory()->create();
        $this->attributeModelsById = $importContext->getDataObjectFactory()->create();
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
        $data = $csvData;

        // Collect data

        // Collect
        $this->_collected = true;
        $sku = trim($this->getValue('sku', $data));

        if (!$sku) {
            return;
        }

        $this->skuEntities->setData($sku, null);

        // Appennd classes collected
        $this->extension->collect($data);

        foreach ($data as $key => $value) {
            $this->loadAttribute($key);
        }

        $this->collectTypeValues(static::ATTRIBUTE_TYPE_INT, $data);
        $this->collectTypeValues(static::ATTRIBUTE_TYPE_DECIMAL, $data);
        $this->collectTypeValues(static::ATTRIBUTE_TYPE_DATETIME, $data);
        $this->collectTypeValues(static::ATTRIBUTE_TYPE_TEXT, $data);
        $this->collectTypeValues(static::ATTRIBUTE_TYPE_VARCHAR, $data);
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

        $logger = $this->logger;
        try {
            $logger->debug('Save starting...');

            $debugTime = time();
            $this->getResource()->fillSkuEntities($this->skuEntities);
            $logger->debug(__('Fill IDS for entities (%1sec).', (time() - $debugTime)));

            $this->extension->fillEntityIds($this->skuEntities);

            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_INT);
            $logger->debug(__('Fill IDS for the INT type (%1sec).', (time() - $debugTime)));

            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_DECIMAL);
            $logger->debug(__('Fill IDS for the DECIMAL type (%1sec).', (time() - $debugTime)));
            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_DATETIME);
            $logger->debug(__('Fill IDS for the DATETIME type (%1sec)', (time() - $debugTime)));
            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_TEXT);
            $logger->debug(__('Fill IDS for the TEXT type (%1sec).', (time() - $debugTime)));
            $debugTime = time();
            $this->_fillAttributeTypeEntityIds(static::ATTRIBUTE_TYPE_VARCHAR);
            $logger->debug(__('Fill IDS for the VARCHAR type (%1sec).', (time() - $debugTime)));

            $logger->debug('DB transaction begin...');
            $this->getResource()->beginTransaction();

            $debugTime = time();
            $this->getResource()->saveTypeValues($this->skuEntities, $this->_attributeTypeEntities);
            $logger->debug(__('Save values (%1sec).', (time() - $debugTime)));

            $debugTime = time();
            $this->getResource()->removeTypeValues($this->skuEntities, $this->_attributeTypeEntitiesRemove);
            $logger->debug(__('Remove values (%1sec).', (time() - $debugTime)));

            $debugTime = time();
            $this->getResource()->saveEntityWebsite($this->skuEntities);
            $logger->debug(__('Remove values (%1sec).', (time() - $debugTime)));

            $this->extension->save();

            $debugTime = time();
            $logger->debug(__('DB transaction commit...'));
            $this->getResource()->commitTransaction();
            $logger->debug(__('DB transaction has beed commited (%1sec).', (time() - $debugTime)));

            // Save update time on main table and for append value tables
            $this->getResource()->saveReportAttributes($this->skuEntities, $this->attributeTypes, $this->extension->getReportAttributes());

            $logger->debug(__('DB transaction begin...'));
            $this->getResource()->beginTransaction();

            $this->extension->saveAfter();

            $logger->debug(__('DB transaction commit...'));
            $this->getResource()->commitTransaction();
            $logger->debug(__('DB transaction has beed commited (%1sec).', (time() - $debugTime)));

            // Indexation common indexes
            $processedEntityIds = [];
            foreach ($this->skuEntities->getData() as $item) {
                array_push($processedEntityIds, $item['entity_id']);
            }
            $this->configuration->setData('processed_entity_ids', $processedEntityIds);

            $this->configuration->addIndexToReindex($this->extension->getIndexer());
        } catch (\Exception $e) {
            $logger->error(
                __("SKUs: ('%1'); Error message: %2", implode("','", array_keys($this->skuEntities->getData())), $e->getMessage())
            );
            $logger->debug(
                __('Exception Throw: %1:%2', $e->getFile(), $e->getLine())
            );
            $logger->debug(__('Exception Trace: %1', $e->getTraceAsString()));
        }
    }

    /**
     * @param string $attributeCode
     * @throws Exception
     */
    protected function loadAttribute(string $attributeCode): void
    {
        if ($this->attributeModels->hasData($attributeCode)) {
            return;
        }

        if (in_array($attributeCode, $this->extension->getSkipAttributes())) {
            return;
        }

        try {
            $attributeModel = $this->importContext->getAttributeRepository()->get(ProductModel::ENTITY, $attributeCode);
            $attributeModel->setStoreId(0);

            $attributeType = $attributeModel->getBackendType();
            if (!isset($this->attributeTypes[$attributeType])) {
                $this->attributeTypes[$attributeType] = [];
            }
            array_push($this->attributeTypes[$attributeType], $attributeCode);

            $this->_prepareAttributesOptions($attributeModel);

            $this->attributeModelsById->setData($attributeModel->getAttributeId(), $attributeModel);
            $this->attributeModels->setData($attributeCode, $attributeModel);
        } catch (\Exception $e) {
            $this->attributeModels->setData($attributeCode, null);
            $this->logger->warning($e->getMessage());
        }
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

        $dataObjectFactory = $this->importContext->getDataObjectFactory();
        $optionsData = $dataObjectFactory->create();
        $optionsDataReverce = $dataObjectFactory->create();

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
        $dataObjectFactory = $this->importContext->getDataObjectFactory();
        $optionsData = $dataObjectFactory->create();
        $optionsDataReverce = $dataObjectFactory->create();

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

            if (isset($this->attributeOptions[$attributeCode]) && $this->attributeOptions[$attributeCode]->hasData($valueItem)) {
                $valueResult[$key] = $valueItem;
                continue;
            }

            if (!$this->configuration->getCreateNewOptions() || !$attributeModel->getSource() instanceof SourceTable) {
                $valueResult[$key] = null;
                continue;
            }

            $storeId = $this->configuration->getStoreId();

            $optionLabel = $this->importContext->getOptionLabelFactory()->create();
            $optionLabel->setStoreId($storeId);
            $optionLabel->setLabel($valueItem);

            $option = $this->importContext->getOptionFactory()->create();
            $option->setLabel($valueItem);
            $option->setStoreLabels([$optionLabel]);
            $option->setSortOrder(0);
            $option->setIsDefault(false);

            try {
                $this->importContext->getAttributeOptionManagement()->add(
                    \Magento\Catalog\Model\Product::ENTITY,
                    $attributeModel->getAttributeId(),
                    $option
                );
            } catch (Exception $e) {
                throw $e;
            }

            $attributeModel = $this->importContext->getAttributeRepository()->get(ProductModel::ENTITY, $attributeCode);
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
