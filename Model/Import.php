<?php
namespace Tereta\Import\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\DataObjectFactory;
use Magento\Store\Model\StoreManagerInterface;

use Tereta\Import\Model\Import\Extract as ImportExtract;
use Tereta\Import\Model\Import\Process as ImportProcess;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Import
 * @package Tereta\Import\Model
 */
class Import extends AbstractModel
{
    /**
     * @var ImportExtract
     */
    protected $_extractor;

    /**
     * @var ImportProcess
     */
    protected $_processor;

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
     * Import constructor.
     * @param ImportProcess $importProcess
     * @param ImportExtract $importExtract
     * @param Context $context
     * @param Registry $registry
     * @param DataObjectFactory $dataObjectFactory
     * @param StoreManagerInterface $storeManager
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        ImportProcess $importProcess,
        ImportExtract $importExtract,
        Context $context,
        Registry $registry,
        DataObjectFactory $dataObjectFactory,
        StoreManagerInterface $storeManager,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = array()
    ) {
        $this->_storeManager = $storeManager;
        $this->_processor = $importProcess;
        $this->_extractor = $importExtract;
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
    public function getExtractAdapter($adapterIdentifier = null)
    {
        if (!$adapterIdentifier) {
            $adapterIdentifier = $this->getData('type');
        }
        
        return $this->_extractor->getAdapter($adapterIdentifier);
    }

    /**
     * @return mixed
     */
    public function getExtractAdapters()
    {
        return $this->_extractor->getData();
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
     * @param $id
     * @throws \Exception
     */
    public function importById($id)
    {
        $this->load($id, 'entity_id');

        if (!$this->getData('entity_id')) {
            throw new \Exception('The configuration by the "' . $id . '" id was not found.');
        }

        $this->getExtractAdapter()->import($this);
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

        $this->getExtractAdapter()->import($this);
    }

    /**
     * @param $data
     * @throws \Exception
     */
    public function encodeData(&$data)
    {
        if (!$this->getExtractAdapter()) {
            return;
        }
        
        $this->getExtractAdapter()->encodeData($data);
    }

    /**
     * @param $data
     * @throws \Exception
     */
    public function decodeData(&$data)
    {
        if (!$this->getExtractAdapter()) {
            return;
        }
        
        $this->getExtractAdapter()->decodeData($data);
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
     * @param $file
     * @throws \Exception
     */
    public function processDocument($file)
    {
        $processAdaptor = $this->_processor->getAdapter('csv');
        if ($this->_commandOutput){
            $processAdaptor->setCommandOutput($this->_commandOutput);
        }
        $processAdaptor->setHtmlOutput($this->htmlOutput);

        $processAdaptor->execute($this, $file);
    }
}