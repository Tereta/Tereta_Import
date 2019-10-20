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

class Import extends AbstractModel
{
    protected $_extractor;
    protected $_processor;
    protected $_commandOutput;
    protected $_storeManager;
    protected $htmlOutput;


    protected $_dataObjectFactory;
    protected $_adapter = [];

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
    
    protected function _construct()
    {
        $this->_init('Tereta\Import\Model\ResourceModel\Import');
    }
    
    public function getExtractAdapter($adapterIdentifier = null)
    {
        if (!$adapterIdentifier) {
            $adapterIdentifier = $this->getData('type');
        }
        
        return $this->_extractor->getAdapter($adapterIdentifier);
    }
    
    public function getExtractAdapters()
    {
        return $this->_extractor->getData();
    }

    public function setCommandOutput(OutputInterface $output)
    {
        $this->_commandOutput = $output;
        return $this;
    }

    public function importById($id)
    {
        $this->load($id, 'entity_id');

        if (!$this->getData('entity_id')) {
            throw new \Exception('The configuration by the "' . $id . '" id was not found.');
        }

        $this->getExtractAdapter()->import($this);
    }

    public function import($identifier)
    {
        $this->load($identifier, 'identifier');
        
        if (!$this->getData('entity_id')) {
            throw new \Exception('The configuration "' . $identifier . '" was not found.');
        }
        
        $this->getExtractAdapter()->import($this);
    }

    public function encodeData(&$data)
    {
        if (!$this->getExtractAdapter()) {
            return;
        }
        
        $this->getExtractAdapter()->encodeData($data);
    }
    
    public function decodeData(&$data)
    {
        if (!$this->getExtractAdapter()) {
            return;
        }
        
        $this->getExtractAdapter()->decodeData($data);
    }
    
    public function beforeSave() {
        if (!$this->getData('type')) {
            return;
        }
        $data = $this->getData();
        $this->encodeData($data);
        $this->setData($data);

        return parent::beforeSave();
    }
    
    public function afterLoad() {
        if (!$this->getData('type')) {
            return;
        }
        
        $data = $this->getData();
        $this->decodeData($data);
        $this->setData($data);

        if ($skipFields = $this->getData('skip_empty_attributes')) { // Rename the field in the feature !!!!
            $this->setData('skip_fields_object', $this->_dataObjectFactory->create(['data' => (array) json_decode($skipFields)]));
        }
        else {
            $this->setData('skip_fields_object', $this->_dataObjectFactory->create());
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

    public function setHtmlOutput($boolean)
    {
        $this->htmlOutput = $boolean;
    }

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