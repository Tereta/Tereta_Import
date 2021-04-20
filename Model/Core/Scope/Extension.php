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

namespace Tereta\Import\Model\Core\Scope;

use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\DataObject;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\Registry;
use Tereta\Import\Model\Logger;
use Exception;

/**
 * Tereta\Import\Model\Core\Scope\Extension
 *
 * Class Extension
 * @package Tereta\Import\Model\Core\Scope
 * @author Tereta Alexander <tereta@mail.ua>
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

    public function get($identifier = null) // !!!!!!!!!!!!
    {
        if (isset($this->getClasses[$identifier])) {
            return $this->getClasses[$identifier];
        }

        if (!isset($this->registeredClasses[$identifier])) {
            throw new Exception('The "' . $identifier . '" registered calss was not found.');
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
     * @throws Exception
     */
    public function collect(array &$data): void
    {
        foreach ($this->registeredClasses as $key=>$item) {
            $this->get($key)->collect($data);
        }
    }

    /**
     * @param DataObject $skuEntities
     * @throws Exception
     */
    public function fillEntityIds(DataObject $skuEntities): void
    {
        foreach ($this->registeredClasses as $key=>$item) {
            $debugTime = time();
            $this->get($key)->fillEntityIds($skuEntities);
            $this->logger->debug(__("Fill IDS for '%1' (%2sec).", $key, (time() - $debugTime)));
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getSkipAttributes(): array
    {
        $skipAttributes = [];

        foreach ($this->registeredClasses as $key=>$item) {
            $skipAttributes = array_merge(
                $skipAttributes,
                $this->get($key)->getSkipAttributes()
            );
        }

        return $skipAttributes;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getIncludeAttributes(): array
    {
        $attributes = [];

        foreach ($this->registeredClasses as $key=>$item) {
            $attributes = array_merge(
                $attributes,
                $this->get($key)->getIncludeAttributes()
            );
        }

        return $attributes;
    }

    /**
     * @throws Exception
     */
    public function getIndexer(): array
    {
        $indexers = [];

        foreach ($this->registeredClasses as $key=>$item) {
            foreach ($this->get($key)->getIndexer() as $index) {
                array_push($indexers, $index);
            }
        }

        return $indexers;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getReportAttributes(): array
    {
        if (!$this->getData('report_attributes')) {
            return [];
        }

        return array_values($this->getData('report_attributes'));
    }

    /**
     * @return void
     * @throws Exception
     */
    public function save(): void
    {
        foreach ($this->registeredClasses as $key=>$item) {
            $debugTime = time();
            try {
                $this->get($key)->save();
            } catch (Exception $e) {
                throw $e;
            }
            $this->logger->debug(__("Save '%1' (%2sec).", $key, (time() - $debugTime)));
        }
    }

    /**
     * @throws Exception
     */
    public function saveAfter(): void
    {
        foreach ($this->registeredClasses as $key=>$item) {
            $debugTime = time();
            $this->get($key)->saveAfter();
            $this->logger->debug(__("Save (after) '%1' (%2sec).", $key, (time() - $debugTime)));
        }
    }
}
