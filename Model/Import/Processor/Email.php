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

use Exception;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\DataObjectFactory;
use Magento\Framework\Filesystem\Io\File as IoFile;
use Tereta\Import\Model\Core\ScopeFactory;
use Tereta\Import\Model\Email\Factory as EmailFactory;
use Tereta\Import\Model\Import\ProcessorFactory as ImportProcessorFactory;
use Tereta\Import\Model\Logger;
use Magento\Framework\Exception\FileSystemException;
use Tereta\Import\Model\Import;
use Tereta\Billing\Model\Exception as BillingException;

/**
 * Tereta\Import\Model\Import\Processor\Email
 *
 * Class Email
 * @package Tereta\Import\Model\Import\Processor
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Email extends AbstractModel
{
    const DIR_PATH = "import/email";

    /**
     * @var IoFile
     */
    protected $ioFile;

    /**
     * @var ImportProcess
     */
    protected $importProcessorFactory;

    /**
     * @var DataObjectFactory
     */
    protected $dataObjectFactory;

    /**
     * Email constructor.
     * @param EmailFactory $emailFactory
     * @param DataObjectFactory $dataObjectFactory
     * @param ImportProcessorFactory $importProcessorFactory
     * @param DirectoryList $dirList
     * @param ScopeFactory $scopeFactory
     * @param Logger $logger
     * @param IoFile $ioFile
     */
    public function __construct(
        EmailFactory $emailFactory,
        DataObjectFactory $dataObjectFactory,
        ImportProcessorFactory $importProcessorFactory,
        DirectoryList $dirList,
        ScopeFactory $scopeFactory,
        Logger $logger,
        IoFile $ioFile
    ) {
        $this->emailFactory = $emailFactory;
        $this->dataObjectFactory = $dataObjectFactory;
        $this->importProcessorFactory = $importProcessorFactory;
        $this->ioFile = $ioFile;

        parent::__construct($dirList, $scopeFactory, $logger);
    }

    /**
     * @param Import $dataModel
     * @throws FileSystemException
     * @throws BillingException
     */
    public function import($dataModel): void
    {
        $dataModel->start();

        $dirPath = $this->directoryList->getPath('var') . '/' . static::DIR_PATH;
        $filePath = $dirPath . '/' . $dataModel->getData('entity_id') . '.csv';

        if (!is_dir($dirPath)) {
            $this->ioFile->mkdir($dirPath, 0775);
        }

        $mailClient = $this->emailFactory->create('imap', [
            'server'   => $dataModel->getData('email_imap_server'),
            'port'     => $dataModel->getData('email_imap_port'),
            'ssl'      => $dataModel->getData('email_imap_ssl'),
            'username' => $dataModel->getData('email_imap_user'),
            'password' => $dataModel->getData('email_imap_password'),
            'box'      => $dataModel->getData('email_imap_box')
        ]);

        $emailList = $mailClient->getList();

        exit('-=-');
        $result = $this->ioFile->read($dataModel->getData('http_url'), $filePath);

        if (!$result) {
            throw new Exception(__('Remote file "%1" was not downloaded.', $dataModel->getData('http_url')));
        }

        $processAdaptor = $this->importProcessorFactory->create()->getAdapter('csv');
        $processAdaptor->setLogger($this->logger);
        $dataModel->setData('csv_file', $filePath);
        $processAdaptor->import($dataModel);
        $dataModel->finish();

        unlink($filePath);
    }

    /**
     * @param $data
     */
    public function encodeData(array &$data): void
    {
        $jsonData = [];
        $jsonData['email_imap_server'] = $data['email_imap_server'];
        $jsonData['email_imap_port'] = $data['email_imap_port'];
        $jsonData['email_imap_ssl'] = $data['email_imap_ssl'];
        $jsonData['email_imap_user'] = $data['email_imap_user'];
        $jsonData['email_imap_password'] = $data['email_imap_password'];
        $jsonData['email_imap_box'] = $data['email_imap_box'];

        $data['additional_data'] = json_encode($jsonData);
    }

    /**
     * @param $data
     */
    public function decodeData(array &$data): void
    {
        if (!$data['additional_data']) {
            return;
        }

        $jsonData = (array) json_decode($data['additional_data']);
        $data['email_imap_server'] = isset($jsonData['email_imap_server']) ? $jsonData['email_imap_server'] : null;
        $data['email_imap_port'] = isset($jsonData['email_imap_port']) ? $jsonData['email_imap_port'] : null;
        $data['email_imap_ssl'] = isset($jsonData['email_imap_ssl']) ? $jsonData['email_imap_ssl'] : null;
        $data['email_imap_user'] = isset($jsonData['email_imap_user']) ? $jsonData['email_imap_user'] : null;
        $data['email_imap_password'] = isset($jsonData['email_imap_password']) ? $jsonData['email_imap_password'] : null;
        $data['email_imap_box'] = isset($jsonData['email_imap_box']) ? $jsonData['email_imap_box'] : null;
    }
}
