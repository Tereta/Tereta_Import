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

namespace Tereta\Import\Model;

use Magento\Framework\Indexer\IndexerRegistry;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\DataObjectFactory;
use Magento\Store\Model\StoreManagerInterface;

use Tereta\Import\Model\Import\Processor as ImportProcessor;

use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\App\Filesystem\DirectoryList;

/**
 * Class Import
 * @package Tereta\Import\Model
 */
class Import extends AbstractModel
{
    /**
     * @var ImportExtract
     */
    protected $processor;

    /**
     * @var
     */
    protected $_commandOutput;

    /**
     * @var StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * @var
     */
    protected $htmlOutput;

    /**
     * @var DataObjectFactory
     */
    protected $_dataObjectFactory;

    /**
     * @var array
     */
    protected $_adapter = [];

    /**
     * @var \Tereta\Import\Model\LoggerFactory
     */
    protected $loggerFactory;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var DirectoryList
     */
    protected $directoryList;

    /**
     * @var IndexerRegistry
     */
    protected $indexerRegistry;

    /**
     * @var array
     */
    protected $processorAdapter = [];

    /**
     * @var null|integer
     */
    protected $startTime = null;

    /**
     * @var array
     */
    protected $reindexProductIds = [];

    /**
     *
     */
    const LOGGER_DIR = "log/import";

    /**
     * Import constructor.
     * @param DirectoryList $directoryList
     * @param \Tereta\Import\Model\LoggerFactory $loggerFactory
     * @param ImportProcessor $importProcessor
     * @param Context $context
     * @param Registry $registry
     * @param DataObjectFactory $dataObjectFactory
     * @param StoreManagerInterface $storeManager
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        IndexerRegistry $indexerRegistry,
        DirectoryList $directoryList,
        LoggerFactory $loggerFactory,
        ImportProcessor $importProcessor,
        Context $context,
        Registry $registry,
        DataObjectFactory $dataObjectFactory,
        StoreManagerInterface $storeManager,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = array()
    ) {
        $this->indexerRegistry = $indexerRegistry;
        $this->directoryList = $directoryList;
        $this->loggerFactory = $loggerFactory;
        $this->_storeManager = $storeManager;
        $this->processor = $importProcessor;
        $this->_dataObjectFactory = $dataObjectFactory;

        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('Tereta\Import\Model\ResourceModel\Import');
    }

    /**
     * @param null $adapterIdentifier
     * @return mixed
     * @throws \Exception
     */
    public function getProcessorAdapter($adapterIdentifier = null)
    {
        if (!$adapterIdentifier) {
            $adapterIdentifier = $this->getData('type');
        }

        if (isset($this->processorAdapter[$adapterIdentifier])) {
            return $this->processorAdapter[$adapterIdentifier];
        }

        $this->processorAdapter[$adapterIdentifier] = $this->processor->getAdapter($adapterIdentifier);
        if ($this->logger) {
            $this->processorAdapter[$adapterIdentifier]->setLogger($this->logger);
        }
        return $this->processorAdapter[$adapterIdentifier];
    }

    /**
     * @return mixed
     */
    public function getProcessorAdapters()
    {
        return $this->processor->getData();
    }

    /**
     * @param OutputInterface $output
     * @return $this
     */
    public function setCommandOutput(OutputInterface $output)
    {
        $this->_commandOutput = $output;
        return $this;
    }

    /**
     * @param OutputInterface $output
     * @return $this
     */
    public function getCommandOutput()
    {
        return $this->_commandOutput;
    }

    /**
     * @param $id
     * @throws \Exception
     */
    public function importById($id)
    {
        $this->load($id, 'entity_id');

        if (!$this->getData('entity_id')) {
            throw new \Exception('The configuration by the "' . $id . '" id was not found.');
        }

        $adapterModel = $this->getProcessorAdapter();
        $adapterModel->import($this);
    }

    /**
     * @param null $identifier
     * @throws \Exception
     */
    public function import($identifier = null)
    {
        if ($identifier) {
            $this->load($identifier, 'identifier');
        }

        if (!$this->getData('entity_id') && $identifier) {
            throw new \Exception('The "' . $identifier . '" import configuration was not found to import.');
        }

        if (!$this->getData('entity_id')) {
            throw new \Exception('The configuration was not found to import.');
        }

        $adapterModel = $this->getProcessorAdapter();
        $adapterModel->import($this);
    }

    /**
     * @param $data
     * @throws \Exception
     */
    public function encodeData(&$data)
    {
        if (!$this->getProcessorAdapter()) {
            return;
        }

        $this->getProcessorAdapter()->encodeData($data);
    }

    /**
     * @param $data
     * @throws \Exception
     */
    public function decodeData(&$data)
    {
        if (!$this->getProcessorAdapter()) {
            return;
        }

        $this->getProcessorAdapter()->decodeData($data);
    }

    /**
     * @return AbstractModel|void
     * @throws \Exception
     */
    public function beforeSave() {
        if (!$this->getData('type')) {
            return;
        }
        $data = $this->getData();
        $this->encodeData($data);
        $this->setData($data);

        return parent::beforeSave();
    }

    /**
     * @return AbstractModel|void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function afterLoad() {
        if (!$this->getData('type')) {
            return;
        }

        // + Logger
        $this->logger = $this->loggerFactory->create();
        $logPath = $this->directoryList->getPath(DirectoryList::VAR_DIR) . '/' . static::LOGGER_DIR . '/' . $this->getData('identifier') . '.log';
        $this->logger->pushHandler(
            new \Monolog\Handler\StreamHandler($logPath)
        );
        if ($this->getCommandOutput()) {
            $this->logger->setCommandOutput($this->getCommandOutput());
        }
        // - Logger

        $data = $this->getData();
        $this->decodeData($data);
        $this->setData($data);

        if ($skipDocumentFields = $this->getData('skip_document_fields')) {
            $this->setData('skip_document_fields_object', $this->_dataObjectFactory->create(['data' => (array) json_decode($skipDocumentFields)]));
        }
        else {
            $this->setData('skip_document_fields_object', $this->_dataObjectFactory->create());
        }

        if ($skipEmptyAttributes = $this->getData('skip_empty_attributes')) {
            $this->setData('skip_empty_attributes_object', $this->_dataObjectFactory->create(['data' => (array) json_decode($skipEmptyAttributes)]));
        }
        else {
            $this->setData('skip_empty_attributes_object', $this->_dataObjectFactory->create());
        }

        if ($clearEmptyAttributes = $this->getData('clear_empty_attributes')) {
            $this->setData('clear_empty_attributes_object', $this->_dataObjectFactory->create(['data' => (array) json_decode($clearEmptyAttributes)]));
        }
        else {
            $this->setData('clear_empty_attributes_object', $this->_dataObjectFactory->create());
        }

        if ($mappingAttribute = $this->getData('mapping_attribute')) {
            $data = json_decode($mappingAttribute);
            $dataObject = $this->_dataObjectFactory->create();
            foreach($data as $item){
                $dataObject->setData($item->key, $item->value);
            }
            $this->setData('mapping_attribute_object', $dataObject);
        }
        else {
            $this->setData('mapping_attribute_object', $this->_dataObjectFactory->create());
        }

        $this->setData('website_id', $this->_storeManager->getStore($this->getStoreId())->getWebsiteId());

        return parent::afterLoad();
    }

    /**
     * @param $boolean
     */
    public function setHtmlOutput($boolean)
    {
        $this->htmlOutput = $boolean;
    }

    /**
     * @return mixed
     */
    public function getHtmlOutput()
    {
        return $this->htmlOutput;
    }

    /**
     *
     */
    public function start()
    {
        $this->startTime = time();
    }

    /**
     * @throws \Exception
     */
    public function finish()
    {
        $this->reindex();

        $this->setData('generated_at', time());
        if ($this->startTime){
            $this->setData(time() - $this->startTime);
        }
        $this->save();

        if ($this->startTime) {
            $this->logger->debug(__('Full import finished during %1sec.', (time() - $this->startTime)));
        }
    }

    /**
     * @param $productId
     */
    public function addProductToReindex($productId)
    {
        array_push($this->reindexProductIds, $productId);
    }

    /**
     *
     */
    protected function reindex()
    {
        $productIds = $this->reindexProductIds;
        $time = time();
        $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Product\Eav\Processor::INDEXER_ID)->reindexList($productIds);
        $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Eav\Processor::INDEXER_ID . ' index with ' . count($productIds) . ' products was processed in: ' . (time() - $time) . 'sec.');

        $time = time();
        $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Product\Price\Processor::INDEXER_ID)->reindexList($productIds);
        $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Price\Processor::INDEXER_ID . ' index with ' . count($productIds) . ' products was processed in: ' . (time() - $time) . 'sec.');

        try{
            $time = time();
            $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Product\Flat\Processor::INDEXER_ID)->reindexList($productIds);
            $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Flat\Processor::INDEXER_ID . ' index with ' . count($productIds) . ' products was processed in: ' . (time() - $time) . 'sec.');
        }
        catch(\Exception $e) {
            $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Flat\Processor::INDEXER_ID . ' index with ' . count($productIds) . ' products is not avaliable.');
        }

        $time = time();
        $this->indexerRegistry->get(\Magento\CatalogSearch\Model\Indexer\Fulltext\Processor::INDEXER_ID)->reindexList($productIds);
        $this->logger->debug('The ' . \Magento\CatalogSearch\Model\Indexer\Fulltext\Processor::INDEXER_ID . ' index with ' . count($productIds) . ' products was processed in: ' . (time() - $time) . 'sec.');
    }
}
