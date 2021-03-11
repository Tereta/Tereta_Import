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
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\Directory\ReadFactory as DirectoryReadFactory;
use Magento\ImportExport\Model\Import\Source\CsvFactory;

use Tereta\Import\Model\Core\ScopeFactory as ScopeFactory;
use Tereta\Import\Model\Import as ImportModel;
use Tereta\Import\Model\Logger;

/**
 * Tereta\Import\Model\Import\Processor\Csv
 *
 * Class Csv
 * @package Tereta\Import\Model\Import\Processor
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Csv extends AbstractModel
{
    const IS_FILE = true;

    /**
     * @var CsvFactory
     */
    protected $csvFactory;

    /**
     * @var Filesystem
     */
    protected $fileSystem;

    /**
     * @var DirectoryReadFactory
     */
    protected $directoryReadFactory;

    /**
     * Csv constructor.
     * @param Filesystem $fileSystem
     * @param CsvFactory $csvFactory
     * @param DirectoryList $directoryList
     * @param ScopeFactory $scopeFactory
     * @param Logger $logger
     * @param DirectoryReadFactory $directoryReadFactory
     */
    public function __construct(
        Filesystem $fileSystem,
        CsvFactory $csvFactory,
        DirectoryList $directoryList,
        ScopeFactory $scopeFactory,
        Logger $logger,
        DirectoryReadFactory $directoryReadFactory
    ) {
        $this->fileSystem = $fileSystem;
        $this->csvFactory = $csvFactory;
        $this->directoryReadFactory = $directoryReadFactory;

        parent::__construct($directoryList, $scopeFactory, $logger);
    }

    /**extends AbstractModel
     * @param $dataModel
     * @return mixed|void
     */
    public function import(ImportModel $dataModel): void
    {
        $file = $dataModel->getData('csv_file');
        if (!$file) {
            $file = $dataModel->getData('import_file');
        }

        $this->logger->info(__('Import starting...'));

        $pathInfo = pathinfo($file);
        $directoryRead = $this->directoryReadFactory->create($pathInfo['dirname']);

        $csv = $this->csvFactory->create([
            'file'      => $file,
            'directory' => $directoryRead
        ]);

        // Configurations
        $dataModel->setFields($csv->getColNames());

        $csv->rewind();

        $collectTime = time();
        $counter = 0;

        $scopeModel = $this->scopeCreate($dataModel);
        while ($csv->valid()) {
            $counter++;

            try {
                $scopeModel->collectItem($csv->current());

                if (($counter % $dataModel->getScopeLimit()) == 0) {
                    $this->logger->info(__("Collected %1 records (%2sec).", $counter, time() - $collectTime));
                    $saveTime = time();
                    $scopeModel->save();
                    $scopeModel = $this->scopeCreate($dataModel);
                    $this->logger->info(__("Saved %1 records (%2sec).", $counter, time() - $saveTime));
                }
            } catch (\Exception $e) {
                $this->logger->error($e->getMessage());
            }

            $csv->next();
        }
        if ($scopeModel->isCollected()) {
            $this->logger->info(__("Collected %1 records (%2sec).", $counter, time() - $collectTime));
            $saveTime = time();
            $scopeModel->save();
            $this->logger->info(__("Saved %1 records (%2sec).", $counter, time() - $saveTime));
        }

        $this->logger->info(__('Import finished'));
    }

    /**
     * @param ImportModel $importModel
     */
    public function encodeData(ImportModel $importModel): void
    {
        $additionalData = $importModel->getData('additional_data');
        $additionalData->setData('csv_file', $importModel->getData('csv_file'));
    }

    /**
     * @param ImportModel $importModel
     */
    public function decodeData(ImportModel $importModel): void
    {
        $additionalData = $importModel->getData('additional_data');
        $importModel->setData('csv_file', $additionalData->getData('csv_file'));
    }
}
