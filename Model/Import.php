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

use Exception;
use Magento\Catalog\Model\Indexer\Product\Eav\Processor as IndexerEav;
use Magento\Catalog\Model\Indexer\Product\Flat\Processor as IndexerFlat;
use Magento\Catalog\Model\Indexer\Product\Price\Processor as IndexerPrice;
use Magento\CatalogSearch\Model\Indexer\Fulltext\Processor as IndexerFulltext;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\DataObjectFactory;
use Magento\Framework\Exception\FileSystemException;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Model\AbstractModel;

use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;
use Magento\Indexer\Model\IndexerFactory;
use Magento\Store\Model\StoreManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tereta\Import\Model\Import\Processor\AbstractModel as ImportProcessorAbstract;
use Tereta\Import\Model\Import\Processor as ImportProcessor;

use Tereta\Import\Model\ResourceModel\Import as ResourceImport;

/**
 * Tereta\Import\Model\Import
 *
 * Class Import
 * @package Tereta\Import\Model
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Import extends AbstractModel
{
    /**
     *
     */
    const LOGGER_DIR = "log/import";

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
     * @var LoggerFactory
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
     * @var array
     */
    protected $indexes = [
        IndexerEav::INDEXER_ID,
        IndexerPrice::INDEXER_ID,
        IndexerFlat::INDEXER_ID,
        IndexerFulltext::INDEXER_ID
    ];

    /**
     * @var ResourceImport
     */
    protected $resourceImport;

    /**
     * @var IndexerFactory
     */
    protected $indexerFactory;

    /**
     * Import constructor.
     * @param ResourceImport $resourceImport
     * @param DirectoryList $directoryList
     * @param LoggerFactory $loggerFactory
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
        ResourceImport $resourceImport,
        IndexerFactory $indexerFactory,
        DirectoryList $directoryList,
        LoggerFactory $loggerFactory,
        ImportProcessor $importProcessor,
        Context $context,
        Registry $registry,
        DataObjectFactory $dataObjectFactory,
        StoreManagerInterface $storeManager,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->resourceImport = $resourceImport;
        $this->indexerFactory = $indexerFactory;
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
    protected function _construct(): void
    {
        $this->_init(ResourceImport::class);
    }

    /**
     * @param string|null $adapterIdentifier
     * @return ImportProcessorAbstract|null
     * @throws Exception
     */
    public function getProcessorAdapter(string $adapterIdentifier = null): ?ImportProcessorAbstract
    {
        if (!$adapterIdentifier) {
            $adapterIdentifier = $this->getData('type');
        }

        if (!$adapterIdentifier) {
            return null;
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
     * @return array
     */
    public function getProcessorAdapters(bool $fullDescription = false): array
    {
        if ($fullDescription) {
            return $this->processor->getData();
        }

        $result = [];
        foreach ($this->processor->getData() as $key => $item) {
            $result[$key] = $item['class'];
        }

        return $result;
    }

    /**
     * @param OutputInterface $output
     * @return $this
     */
    public function setCommandOutput(OutputInterface $output): self
    {
        $this->_commandOutput = $output;
        return $this;
    }

    /**
     * @return OutputInterface|null
     */
    public function getCommandOutput(): ?OutputInterface
    {
        return $this->_commandOutput;
    }

    /**
     * @param integer $id
     * @throws Exception
     */
    public function importById(int $id): void
    {
        $this->resourceImport->load($this, $id);

        if (!$this->getData('entity_id')) {
            throw new Exception('The configuration by the "' . $id . '" id was not found.');
        }

        $adapterModel = $this->getProcessorAdapter();
        if (!$adapterModel) {
            throw new Exception('The import type is not selected.');
        }

        $adapterModel->import($this);
    }

    /**
     * @param string|null $identifier
     * @throws Exception
     */
    public function import(string $identifier = null): void
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
     * @param array $data
     * @throws Exception
     */
    public function encodeData(): void
    {
        if (!$this->getProcessorAdapter()) {
            return;
        }

        if (!$this->getData('additional_data') || is_string($this->getData('additional_data'))) {
            $this->setData('additional_data', $this->_dataObjectFactory->create());
        }

        foreach ($this->getProcessorAdapters() as $adapter) {
            $adapter->encodeData($this);
        }

        $this->setData(
            'additional_data',
            json_encode($this->getData('additional_data')->getData())
        );
    }

    /**
     * @param array $data
     * @throws Exception
     */
    public function decodeData(): void
    {
        if (!$this->getProcessorAdapter()) {
            return;
        }

        if (is_string($this->getData('additional_data'))) {
            $this->setData('additional_data', $this->_dataObjectFactory->create([
                'data' => (array) json_decode($this->getData('additional_data'))
            ]));
        }

        foreach ($this->getProcessorAdapters() as $adapter) {
            $adapter->decodeData($this);
        }
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function beforeSave(): self
    {
        $identifier = trim(strtolower($this->getData('identifier')));
        if (!$identifier) {
            throw new Exception(__('Identifier should not be empty.'));
        }

        if (preg_match('/[^a-z0-9_]/', $identifier)) {
            throw new Exception(__('Identifier should contain only [a-z0-9_] symbols.'));
        }
        $this->setData('identifier', $identifier);

        if (!$this->getData('type')) {
            return parent::beforeSave();
        }
        $this->encodeData();

        return parent::beforeSave();
    }

    /**
     * @return $this
     * @throws FileSystemException
     * @throws NoSuchEntityException
     */
    public function afterLoad(): self
    {
        if (!$this->getData('type')) {
            return parent::afterLoad();
        }

        // + Logger
        $this->logger = $this->loggerFactory->create();
        $logPath = $this->directoryList->getPath(DirectoryList::VAR_DIR) . '/' . $this->logger::LOGGER_DIR . '/' . $this->getData('identifier') . '.log';
        $this->logger->pushHandler(
            new \Monolog\Handler\StreamHandler($logPath)
        );
        if ($this->getCommandOutput()) {
            $this->logger->setCommandOutput($this->getCommandOutput());
        }
        // - Logger

        $this->decodeData($this);

        if ($skipDocumentFields = $this->getData('skip_document_fields')) {
            $this->setData('skip_document_fields_object', $this->_dataObjectFactory->create(['data' => (array) json_decode($skipDocumentFields)]));
        } else {
            $this->setData('skip_document_fields_object', $this->_dataObjectFactory->create());
        }

        if ($skipEmptyAttributes = $this->getData('skip_empty_attributes')) {
            $this->setData('skip_empty_attributes_object', $this->_dataObjectFactory->create(['data' => (array) json_decode($skipEmptyAttributes)]));
        } else {
            $this->setData('skip_empty_attributes_object', $this->_dataObjectFactory->create());
        }

        if ($clearEmptyAttributes = $this->getData('clear_empty_attributes')) {
            $this->setData('clear_empty_attributes_object', $this->_dataObjectFactory->create(['data' => (array) json_decode($clearEmptyAttributes)]));
        } else {
            $this->setData('clear_empty_attributes_object', $this->_dataObjectFactory->create());
        }

        if ($mappingAttribute = $this->getData('mapping_attribute')) {
            $data = json_decode($mappingAttribute);
            $dataObject = $this->_dataObjectFactory->create();
            $mapData = [];
            foreach ($data as $item) {
                if (!isset($mapData[$item->key])) {
                    $mapData[$item->key] = [];
                }

                array_push($mapData[$item->key], $item->value);
            }
            $dataObject->setData($mapData);
            $this->setData('mapping_attribute_object', $dataObject);
        } else {
            $this->setData('mapping_attribute_object', $this->_dataObjectFactory->create());
        }

        $this->setData('website_id', $this->_storeManager->getStore($this->getStoreId())->getWebsiteId());

        return parent::afterLoad();
    }

    /**
     * @param bool $boolean
     */
    public function setHtmlOutput(bool $boolean): void
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
    public function start(): void
    {
        $this->startTime = time();
    }

    /**
     * @throws Exception
     */
    public function finish(): void
    {
        $this->reindex();

        $this->setData('generated_at', (string) date('Y-m-d G:i:s', time()));
        if ($this->startTime) {
            $this->setData('generation_time', time() - $this->startTime);
        }

        $this->resourceImport->save($this);

        if ($this->startTime) {
            $this->logger->debug(__('Full import finished during %1sec.', (time() - $this->startTime)));
        }
    }

    /**
     *
     */
    public function flushProductsToReindex(): void
    {
        $this->reindexProductIds = [];
    }

    /**
     * @param int $productId
     */
    public function addProductToReindex(int $productId): void
    {
        array_push($this->reindexProductIds, $productId);
    }

    /**
     * @param array $indexes
     */
    public function addIndexToReindex(array $indexes): void
    {
        foreach ($indexes as $index) {
            if (in_array($index, $this->indexes)) {
                continue;
            }

            array_push($this->indexes, $index);
        }
    }

    /**
     *
     */
    protected function reindex(): void
    {
        $productIds = $this->reindexProductIds;

        foreach ($this->indexes as $index) {
            try {
                $time = time();
                $indexer = $this->indexerFactory->create();
                $indexer->load($index);
                $indexer->reindexList($productIds);

                $this->logger->debug('The ' . $index . ' index with ' . count($productIds) . ' products was processed in: ' . (time() - $time) . 'sec.');
            } catch (\Exception $e) {
                $this->logger->debug('The ' . $index . ' index with ' . count($productIds) . ' products is not avaliable.');
            }
        }
    }
}
