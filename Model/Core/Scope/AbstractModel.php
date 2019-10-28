<?php
namespace Tereta\Import\Model\Core\Scope;

use Magento\Framework\DataObject;
use Magento\Framework\Model\AbstractModel as AbstractModelSource;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use Tereta\Import\Model\Logger;

/**
 * Tereta\Import\Model\Core\Scope\AbstractModel
 *
 * Class AbstractModel
 * @package Tereta\Import\Model\Core\Scope
 */
abstract class AbstractModel extends AbstractModelSource
{
    /**
     * @var DataObject
     */
    protected $configuration;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * AbstractModel constructor.
     * @param Context $context
     * @param Registry $registry
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param DataObject $configuration
     * @param Logger $logger
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        DataObject $configuration,
        Logger $logger,
        array $data = []
    ) {
        $this->configuration = $configuration;
        $this->logger = $logger;

        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * @return array
     */
    public function getSkipAttributes()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getIncludeAttributes()
    {
        return [];
    }

    /**
     * @param $data
     */
    public function collect(&$data)
    {
    }

    /**
     * @return array
     */
    public function getUpdateStatisticAttributes()
    {
        return [];
    }

    /**
     * @param $skuEntities
     */
    public function fillEntityIds($skuEntities)
    {
    }

    /**
     * @return void
     */
    public function save()
    {
    }

    /**
     * @return void
     */
    public function saveAfter()
    {
    }

    public function reindex()
    {
    }
}