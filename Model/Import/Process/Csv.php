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

namespace Tereta\Import\Model\Import\Process;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\DataObjectFactory;
use Magento\Framework\App\State;
use Magento\Indexer\Model\IndexerFactory;
use Magento\ImportExport\Model\Import\Source\CsvFactory;
use Magento\Framework\Filesystem;

use Symfony\Component\Console\Output\OutputInterface;

use Tereta\Import\Model\Logger;
use Tereta\Import\Model\Core\ScopeFactory as ScopeFactory;
use Tereta\Import\Model\Import\Extract\AbstractModel;

/**
 * Class Csv
 * @package Tereta\Import\Model\Import\Process
 */
class Csv extends AbstractModel
{
    /**
     * @var CsvFactory
     */
    protected $csvFactory;

    /**
     * @var Filesystem
     */
    protected $fileSystem;

    /**
     * @var string
     */
    protected $htmlOutput;

    /**
     * Csv constructor.
     * @param Filesystem $fileSystem
     * @param CsvFactory $csvFactory
     * @param ScopeFactory $scopeFactory
     * @param State $_state
     * @param Logger $logger
     * @param DirectoryList $dir
     * @param DataObjectFactory $dataObjectFactory
     * @param IndexerFactory $indexerFactory
     */
    public function __construct__(
        Filesystem $fileSystem,
        CsvFactory $csvFactory,
        ScopeFactory $scopeFactory,
        State $_state,
        Logger $logger,
        DirectoryList $dir,
        DataObjectFactory $dataObjectFactory,
        IndexerFactory $indexerFactory
    ) {
        $this->_dataObjectFactory = $dataObjectFactory;
        $this->_scopeFactory = $scopeFactory;
        $this->_state = $_state;
        $this->_dir = $dir;
        $this->_logger = $logger;
        $this->_indexerFactory = $indexerFactory;
        $this->_csvFactory = $csvFactory;
        $this->fileSystem = $fileSystem;
    }

    public function __construct(
        Filesystem $fileSystem,
        CsvFactory $csvFactory,
        DirectoryList $directoryList,
        ScopeFactory $scopeFactory,
        Logger $logger
    ) {
        $this->fileSystem = $fileSystem;
        $this->csvFactory = $csvFactory;

        parent::__construct($directoryList, $scopeFactory, $logger);
    }

    public function import($dataModel, $configurationModel = null)
    {
        $this->beforeImport($dataModel);

        $file = $configurationModel->getFile();

        $this->logger->info(__('Import starting...'));

        $csv = $this->csvFactory->create([
            'file'      => $file,
            'directory' => $this->fileSystem->getDirectoryRead(DirectoryList::VAR_DIR)
        ]);

        // Configurations
        $dataModel->setFields($csv->getColNames());

        $csv->rewind();

        $time = time();
        $counter = 0;

        $scopeModel = $this->scopeCreate($dataModel);
        while ($csv->valid()) {
            $counter++;

            try {
                // Debug string
                //if ($counter >= 54 && $counter <= 55) { // Debug
                //    $scopeModel->collectItem($csv->current());  // Debug
                //}  // Debug

                $scopeModel->collectItem($csv->current());

                if (($counter % $dataModel->getScopeLimit()) == 0) {
                    $this->logger->info(__("Collected %1 records, time spent %2sec.", $counter, time() - $time));
                    $scopeModel->save();
                    $scopeModel = $this->scopeCreate($dataModel);
                    $this->logger->info(__("Processed %1 records, time spent %2sec.", $counter, time() - $time));
                }
            }
            catch(\Exception $e) {
                $this->logger->error($e->getMessage());
            }

            $csv->next();
        }
        if ($scopeModel->isCollected()){
            $this->logger->info(__("Collected %1 records, time spent %2sec.", $counter, time() - $time));
            $scopeModel->save();
            $this->logger->info(__("Processed %1 records, time spent %2sec.", $counter, time() - $time));
        }

        $this->logger->info(__('Import finished'));
    }
}
