<?php
namespace Tereta\Import\Model\Core\Scope;

use Tereta\Import\Model\Logger;
use Magento\Framework\Model\Context as ModelContext;
use Magento\Framework\Registry;
use Tereta\Import\Model\ResourceModel\Core\ScopeFactory as ScopeResourceFactory;
use Magento\Framework\DataObjectFactory;
use Magento\Eav\Model\AttributeRepository;

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

    public function __construct(
        Logger $logger,
        ModelContext $context,
        ScopeResourceFactory $scopeResourceFactory,
        DataObjectFactory $dataObjectFactory,
        AttributeRepository $attributeRepository,
        Registry $registry
    )
    {
        $this->attributeRepository = $attributeRepository;
        $this->dataObjectFactory = $dataObjectFactory;
        $this->scopeResourceFactory = $scopeResourceFactory;
        $this->registry = $registry;
        $this->logger = $logger;
        $this->context = $context;
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
