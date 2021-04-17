<?php
namespace Tereta\Import\Model\Core\Scope;

use Magento\Eav\Api\Data\AttributeOptionLabelInterfaceFactory;
use Tereta\Import\Model\Logger;
use Magento\Framework\Model\Context as ModelContext;
use Magento\Framework\Registry;
use Tereta\Import\Model\ResourceModel\Core\ScopeFactory as ScopeResourceFactory;
use Magento\Framework\DataObjectFactory;
use Magento\Eav\Model\AttributeRepository;
use Magento\Eav\Api\Data\AttributeOptionInterfaceFactory;
use Magento\Eav\Api\AttributeOptionManagementInterface;

/**
 * Tereta\Import\Model\Core\Scope\Context
 *
 * Class Context
 * @package Tereta\Import\Model\Core\Scope
 */
class Context
{
    protected $logger;

    protected $context;

    protected $registry;

    protected $scopeResourceFactory;

    protected $dataObjectFactory;

    protected $attributeRepository;

    protected $optionLabelFactory;

    protected $optionFactory;

    protected $attributeOptionManagement;

    protected $attributeSetFactory;

    protected $extensionFactory;

    protected $directoryList;

    public function __construct(
        Logger $logger,
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
    )
    {
        $this->extensionFactory = $extensionFactory;
        $this->attributeSetFactory = $attributeSetFactory;
        $this->attributeOptionManagement = $attributeOptionManagement;
        $this->optionFactory = $optionFactory;
        $this->optionLabelFactory = $optionLabelFactory;
        $this->attributeRepository = $attributeRepository;
        $this->dataObjectFactory = $dataObjectFactory;
        $this->scopeResourceFactory = $scopeResourceFactory;
        $this->registry = $registry;
        $this->logger = $logger;
        $this->context = $context;
    }

    public function getExtensionFactory()
    {
        return $this->extensionFactory;
    }

    public function getAttributeSetFactory()
    {
        return $this->attributeSetFactory;
    }

    public function getAttributeOptionManagement()
    {
        return $this->attributeOptionManagement;
    }

    public function getOptionFactory()
    {
        return $this->optionFactory;
    }

    public function getOptionLabelFactory()
    {
        return $this->optionLabelFactory;
    }

    public function getAttributeRepository()
    {
        return $this->attributeRepository;
    }

    public function getDataObjectFactory()
    {
        return $this->dataObjectFactory;
    }

    public function getScopeResourceFactory()
    {
        return $this->scopeResourceFactory;
    }

    public function getLogger()
    {
        return $this->logger;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function getRegistry()
    {
        return $this->registry;
    }
}
