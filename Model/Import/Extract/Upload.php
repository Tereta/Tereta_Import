<?php

namespace Tereta\Import\Model\Import\Extract;

use Magento\Framework\Filesystem\DirectoryList;
use Magento\Framework\Filesystem\Io\File as IoFile;
use Tereta\Import\Model\Import\Extract\AbstractModel;

class Upload extends AbstractModel
{
    const DIR_PATH = "import/uploaded_file";
    
    protected $_directoryList;
    protected $_ioFile;
    
    public function __construct(
        DirectoryList $directoryList,
        IoFile $ioFile
    ) {
        $this->directoryList = $directoryList;
        $this->ioFile = $ioFile;
    }
    
    public function import($dataModel)
    {
        $importDir = $this->directoryList->getPath('var') . '/import/upload_file/';

        if ($uploadFile = $dataModel->getData('upload_file')) {
            $uploadFile = reset($uploadFile);
        }

        if ($uploadFile && isset($uploadFile['file'])) {
            $uploadFile = $uploadFile['file'];
        }
        else {
            return;
        }

        $dataModel->processDocument($importDir . $uploadFile);
    }

    public function afterSave($object)
    {
        $data = $object->getData();
        $importDir = $this->directoryList->getPath('var') . '/import/upload_file/';
        $isChanged = false;
        if (isset($data['upload_file']) && $data['upload_file']) {
            foreach($data['upload_file'] as $key=>$item) {
                $tempPrefix = 'temp_';
                if (substr($item['file'], 0, strlen($tempPrefix)) == $tempPrefix) {
                    $currentFileName = $item['file'];
                    $item['file'] = $object->getId() . '.' . pathinfo($currentFileName, PATHINFO_EXTENSION);
                    $this->ioFile->mv($importDir . '/' . $currentFileName, $importDir . '/' . $item['file']);
                    $data['upload_file'][$key] = $item;
                    $isChanged = true;
                }
            }
        }

        if ($isChanged) {
            $object->setData($data);
            $object->save();
        }
    }

    public function encodeData(&$data)
    {
        $dataUploadFile = null;
        $data['additional_data'] = '';
        if (isset($data['upload_file']) && $data['upload_file']) {
            $dataUploadFile = reset($data['upload_file']);
            $data['additional_data'] = json_encode($dataUploadFile);
        }
    }
    
    public function decodeData(&$data)
    {
        if (!$data['additional_data']) {
            return;
        }
        
        $jsonData = (array) json_decode($data['additional_data']);
        if ($jsonData) {
            $data['upload_file'] = [$jsonData];
        }
    }
}