<?php
namespace Tereta\Import\Model\Core\Scope;

use Magento\Eav\Api\AttributeOptionManagementInterface;
use Magento\Eav\Api\Data\AttributeOptionInterfaceFactory;
use Magento\Eav\Api\Data\AttributeOptionLabelInterfaceFactory;
use Magento\Eav\Model\AttributeRepository;
use Magento\Framework\DataObjectFactory;
use Magento\Framework\Model\Context as ModelContext;
use Magento\Framework\Registry;
use Tereta\Import\Model\Logger;
use Tereta\Import\Model\ResourceModel\Core\ScopeFactory as ScopeResourceFactory;

/**
 * Tereta\Import\Model\Core\Scope\Context
 *
 * Class Context
 * @package Tereta\Import\Model\Core\Scope
 */
class Context
{
    /**
     * @var ModelContext
     */
    protected $context;

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var ScopeResourceFactory
     */
    protected $scopeResourceFactory;

    /**
     * @var DataObjectFactory
     */
    protected $dataObjectFactory;

    /**
     * @var AttributeRepository
     */
    protected $attributeRepository;

    /**
     * @var AttributeOptionLabelInterfaceFactory
     */
    protected $optionLabelFactory;

    /**
     * @var AttributeOptionInterfaceFactory
     */
    protected $optionFactory;

    /**
     * @var AttributeOptionManagementInterface
     */
    protected $attributeOptionManagement;

    /**
     * @var AttributeSetFactory
     */
    protected $attributeSetFactory;

    /**
     * @var ExtensionFactory
     */
    protected $extensionFactory;

    /**
     * Context constructor.
     * @param ModelContext $context
     * @param ScopeResourceFactory $scopeResourceFactory
     * @param DataObjectFactory $dataObjectFactory
     * @param AttributeRepository $attributeRepository
     * @param AttributeOptionLabelInterfaceFactory $optionLabelFactory
     * @param AttributeOptionInterfaceFactory $optionFactory
     * @param AttributeOptionManagementInterface $attributeOptionManagement
     * @param AttributeSetFactory $attributeSetFactory
     * @param ExtensionFactory $extensionFactory
     * @param Registry $registry
     */
    public function __construct(
        ModelContext $context,
        ScopeResourceFactory $scopeResourceFactory,
        DataObjectFactory $dataObjectFactory,
        AttributeRepository $attributeRepository,
        AttributeOptionLabelInterfaceFactory $optionLabelFactory,
        AttributeOptionInterfaceFactory $optionFactory,
        AttributeOptionManagementInterface $attributeOptionManagement,
        AttributeSetFactory $attributeSetFactory,
        ExtensionFactory $extensionFactory,
        Registry $registry
    ) {
        $this->extensionFactory = $extensionFactory;
        $this->attributeSetFactory = $attributeSetFactory;
        $this->attributeOptionManagement = $attributeOptionManagement;
        $this->optionFactory = $optionFactory;
        $this->optionLabelFactory = $optionLabelFactory;
        $this->attributeRepository = $attributeRepository;
        $this->dataObjectFactory = $dataObjectFactory;
        $this->scopeResourceFactory = $scopeResourceFactory;
        $this->registry = $registry;
        $this->context = $context;
    }

    /**
     * @return ExtensionFactory
     */
    public function getExtensionFactory(): ExtensionFactory
    {
        return $this->extensionFactory;
    }

    /**
     * @return AttributeSetFactory
     */
    public function getAttributeSetFactory(): AttributeSetFactory
    {
        return $this->attributeSetFactory;
    }

    /**
     * @return AttributeOptionManagementInterface
     */
    public function getAttributeOptionManagement(): AttributeOptionManagementInterface
    {
        return $this->attributeOptionManagement;
    }

    /**
     * @return AttributeOptionInterfaceFactory
     */
    public function getOptionFactory(): AttributeOptionInterfaceFactory
    {
        return $this->optionFactory;
    }

    /**
     * @return AttributeOptionLabelInterfaceFactory
     */
    public function getOptionLabelFactory(): AttributeOptionLabelInterfaceFactory
    {
        return $this->optionLabelFactory;
    }

    /**
     * @return AttributeRepository
     */
    public function getAttributeRepository(): AttributeRepository
    {
        return $this->attributeRepository;
    }

    /**
     * @return DataObjectFactory
     */
    public function getDataObjectFactory(): DataObjectFactory
    {
        return $this->dataObjectFactory;
    }

    /**
     * @return ScopeResourceFactory
     */
    public function getScopeResourceFactory(): ScopeResourceFactory
    {
        return $this->scopeResourceFactory;
    }

    /**
     * @return ModelContext
     */
    public function getContext(): ModelContext
    {
        return $this->context;
    }

    /**
     * @return Registry
     */
    public function getRegistry(): Registry
    {
        return $this->registry;
    }
}
