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

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Filesystem\Io\File as IoFile;
use Tereta\Import\Model\Core\ScopeFactory;
use Tereta\Import\Model\Import\ProcessorFactory as ImportProcessorFactory;
use Tereta\Import\Model\Logger;

/**
 * Tereta\Import\Model\Import\Processor\Upload
 *
 * Class Upload
 * @package Tereta\Import\Model\Import\Processor
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Upload extends AbstractModel
{
    /**
     *
     */
    const DIR_PATH = "tereta/import/upload_file";

    /**
     * @var IoFile
     */
    protected $ioFile;

    /**
     * @var ImportProcessorFactory
     */
    protected $importProcessorFactory;

    /**
     * Upload constructor.
     * @param ImportProcessorFactory $importProcessorFactory
     * @param IoFile $ioFile
     * @param DirectoryList $directoryList
     * @param ScopeFactory $scopeFactory
     * @param Logger $logger
     */
    public function __construct(
        ImportProcessorFactory $importProcessorFactory,
        IoFile $ioFile,
        DirectoryList $directoryList,
        ScopeFactory $scopeFactory,
        Logger $logger
    ) {
        $this->ioFile = $ioFile;
        $this->importProcessorFactory = $importProcessorFactory;

        parent::__construct($directoryList, $scopeFactory, $logger);
    }

    /**
     * @param $dataModel
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function import($dataModel)
    {
        $importDir = $this->directoryList->getPath('media') . '/' . static::DIR_PATH;

        if ($uploadFile = $dataModel->getData('upload_file')) {
            $uploadFile = reset($uploadFile);
        }

        if ($uploadFile && isset($uploadFile['file'])) {
            $uploadFile = $uploadFile['file'];
        } else {
            return;
        }

        $processAdaptor = $this->importProcessorFactory->create()->getAdapter('csv');
        if ($dataModel->getCommandOutput()) {
            $processAdaptor->setCommandOutput($dataModel->getCommandOutput());
        }
        $processAdaptor->setHtmlOutput($dataModel->getHtmlOutput());
        $dataModel->setData('csv_file', $importDir . '/' . $uploadFile);
        $processAdaptor->import($dataModel);
        $dataModel->finish();
    }

    /**
     * @param $object
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function afterSave($object)
    {
        $data = $object->getData();
        $importDir = $this->directoryList->getPath('media') . '/' . static::DIR_PATH;
        $isChanged = false;
        if (isset($data['upload_file']) && $data['upload_file']) {
            foreach ($data['upload_file'] as $key=>$item) {
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
