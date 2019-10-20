<?php

namespace Tereta\Import\Model\Import\Extract;

use Magento\Framework\Filesystem\DirectoryList;
use Magento\Framework\Filesystem\Io\File as IoFile;
use Tereta\Import\Model\Import\Extract\AbstractModel;

class Http extends AbstractModel
{
    const DIR_PATH = "import/http_url";
    
    protected $_directoryList;
    protected $_ioFile;
    
    public function __construct(
        DirectoryList $directoryList,
        IoFile $ioFile
    ) {
        $this->_directoryList = $directoryList;
        $this->_ioFile = $ioFile;
    }
    
    public function import($dataModel)
    {
        if (!$dataModel->getData('http_url')) {
            throw new \Exception('HTTP URL was not present.');
        }
        
        $dirPath = $this->_directoryList->getPath('var') . '/' . static::DIR_PATH;
        $filePath = $dirPath . '/' . $dataModel->getData('entity_id') . '.csv';
        
        if (!is_dir($dirPath)) {
            $this->_ioFile->mkdir($dirPath, 0775);
        }
        
        $result = $this->_ioFile->read($dataModel->getData('http_url'), $filePath);

        if (!$result) {
            throw new \Exception('Remote file "' . $dataModel->getData('http_url'). '" was not downloaded.');
        }
        
        $dataModel->processDocument($filePath);
        
        unlink($filePath);
    }
    
    public function encodeData(&$data)
    {
        $jsonData = [];
        $jsonData['http_url'] = $data['http_url'];
        
        $data['additional_data'] = json_encode($jsonData);
    }
    
    public function decodeData(&$data)
    {
        if (!$data['additional_data']) {
            return;
        }
        
        $jsonData = (array) json_decode($data['additional_data']);
        $data['http_url'] = isset($jsonData['http_url']) ? $jsonData['http_url'] : null;
    }
}