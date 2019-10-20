<?php
namespace Tereta\Import\Model\Core\Scope;

use Magento\Framework\DataObject;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\ObjectManagerInterface;
use Tereta\Import\Model\Logger;

/**
 * Tereta\Import\Model\Core\Scope\Extension
 *
 * Class Extension
 * @package Tereta\Import\Model\Core\Scope
 */
class Extension extends AbstractModel
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var DataObject
     */
    protected $configuration;

    /**
     * @var array
     */
    protected $getClasses = [];

    /**
     * @var array
     */
    protected $registeredClasses;

    /**
     * Extension constructor.
     * @param ObjectManagerInterface $objectManager
     * @param Context $context
     * @param Registry $registry
     * @param DataObject $configuration
     * @param Logger $logger
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $registeredClasses
     * @param array $data
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        Context $context,
        Registry $registry,
        DataObject $configuration,
        Logger $logger,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $registeredClasses,
        array $data = []
    ) {
        $this->configuration = $configuration;
        $this->logger = $logger;
        $this->registeredClasses = $registeredClasses;
        $this->objectManager = $objectManager;

        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * @param null $identifier
     * @return mixed
     * @throws \Exception
     */
    public function get($identifier = null)
    {
        if (isset($this->getClasses[$identifier])) {
            return $this->getClasses[$identifier];
        }

        if (!isset($this->registeredClasses[$identifier])) {
            throw new \Exception('The "' . $identifier . '" registered calss was not found.');
        }

        $class = $this->registeredClasses[$identifier];

        $this->getClasses[$identifier] = $this->objectManager->create($class, [
            'configuration'=>$this->configuration,
            'logger'=>$this->logger
        ]);
        return $this->getClasses[$identifier];
    }

    /**
     * @param $data
     * @throws \Exception
     */
    public function collect(&$data)
    {
        foreach($this->registeredClasses as $key=>$item) {
            $this->get($key)->collect($data);
        }
    }

    /**
     * @param $skuEntities
     * @throws \Exception
     */
    public function fillEntityIds($skuEntities)
    {
        foreach($this->registeredClasses as $key=>$item) {
            $debugTime = time();
            $this->get($key)->fillEntityIds($skuEntities);
            $this->logger->debug("Fill IDS for '" . $key . "', time spent: " . (time() - $debugTime) . "sec.");
        }
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getSkipAttributes()
    {
        $skipAttributes = [];

        foreach($this->registeredClasses as $key=>$item) {
            $skipAttributes = array_merge(
                $skipAttributes,
                $this->get($key)->getSkipAttributes()
            );
        }

        return $skipAttributes;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getIncludeAttributes()
    {
        $attributes = [];

        foreach($this->registeredClasses as $key=>$item) {
            $attributes = array_merge(
                $attributes,
                $this->get($key)->getIncludeAttributes()
            );
        }

        return $attributes;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getUpdateStatisticAttributes()
    {
        $attributes = [];

        foreach($this->registeredClasses as $key=>$item) {
            $attributes = array_merge(
                $attributes,
                $this->get($key)->getUpdateStatisticAttributes()
            );
        }

        return $attributes;
    }

    /**
     * @return AbstractModel|void
     * @throws \Exception
     */
    public function save()
    {
        foreach($this->registeredClasses as $key=>$item) {
            $debugTime = time();
            $this->get($key)->save();
            $this->logger->debug("Save '" . $key . "', time spent: " . (time() - $debugTime) . "sec.");
        }
    }

    /**
     * @throws \Exception
     */
    public function saveAfter()
    {
        foreach($this->registeredClasses as $key=>$item) {
            $debugTime = time();
            $this->get($key)->saveAfter();
            $this->logger->debug("Save (after) '" . $key . "', time spent: " . (time() - $debugTime) . "sec.");
        }
    }
}