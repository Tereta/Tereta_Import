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

namespace Tereta\Import\Model\Import\Processor;

use Tereta\Import\Model\Import\Process as ImportProcess;
use Magento\Framework\Filesystem\DirectoryList;
use Magento\Framework\Filesystem\Io\File as IoFile;
use Tereta\Import\Model\Core\ScopeFactory;
use Tereta\Import\Model\Logger;
use Magento\Framework\DataObjectFactory;

/**
 * Class Upload
 * @package Tereta\Import\Model\Import\Extract
 */
class Upload extends AbstractModel
{
    /**
     *
     */
    const DIR_PATH = "import/upload_file";

    /**
     * @var IoFile
     */
    protected $ioFile;

    /**
     * @var ImportProcess
     */
    protected $importProcess;

    protected $dataObjectFactory;

    /**
     * Upload constructor.
     * @param IoFile $ioFile
     * @param DirectoryList $directoryList
     * @param ScopeFactory $scopeFactory
     * @param Logger $logger
     */
    public function __construct(
        DataObjectFactory $dataObjectFactory,
        ImportProcess $importProcess,
        IoFile $ioFile,
        DirectoryList $directoryList,
        ScopeFactory $scopeFactory,
        Logger $logger
    ) {
        $this->ioFile = $ioFile;
        $this->importProcess = $importProcess;
        $this->dataObjectFactory = $dataObjectFactory;

        parent::__construct($directoryList, $scopeFactory, $logger);
    }

    /**
     * @param $dataModel
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function import($dataModel, $additionalData = null)
    {
        $this->beforeImport($dataModel);

        $importDir = $this->directoryList->getPath('var') . '/' .  static::DIR_PATH;

        if ($uploadFile = $dataModel->getData('upload_file')) {
            $uploadFile = reset($uploadFile);
        }

        if ($uploadFile && isset($uploadFile['file'])) {
            $uploadFile = $uploadFile['file'];
        }
        else {
            return;
        }

        $processAdaptor = $this->importProcess->getAdapter('csv');
        if ($dataModel->getCommandOutput()) {
            $processAdaptor->setCommandOutput($dataModel->getCommandOutput());
        }
        $processAdaptor->setHtmlOutput($dataModel->getHtmlOutput());
        $processAdaptor->import($dataModel, $this->dataObjectFactory->create(['data' => ['file' => $importDir . '/' . $uploadFile]]));
        $dataModel->finish();
    }

    /**
     * @param $object
     * @throws \Magento\Framework\Exception\FileSystemException
     */
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

    /**
     * @param $data
     */
    public function encodeData(&$data)
    {
        $dataUploadFile = null;
        $data['additional_data'] = '';
        if (isset($data['upload_file']) && $data['upload_file']) {
            $dataUploadFile = reset($data['upload_file']);
            $data['additional_data'] = json_encode($dataUploadFile);
        }
    }

    /**
     * @param $data
     */
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
