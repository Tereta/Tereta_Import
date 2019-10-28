<?php
namespace Tereta\Import\Model\ResourceModel\Core\Scope;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb as FrameworkAbstractDb;
use Tereta\Import\Model\Logger;

/**
 * Tereta\Import\Model\ResourceModel\Core\Scope\AbstractDb
 *
 * Class AbstractDb
 * @package Tereta\Import\Model\ResourceModel\Core\Scope
 */
abstract class AbstractDb extends FrameworkAbstractDb
{
    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var DataObject
     */
    protected $configuration;

    protected $reindexProductIds;

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

    public function reindex()
    {
        
    }

    public function setReindexProductIds($productIds)
    {
        $this->reindexProductIds = $productIds;
    }
}