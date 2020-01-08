<?php
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

class Csv
{
    /**
     * @var DataObjectFactory
     */
    protected $_dataObjectFactory;

    /**
     * @var ScopeFactory
     */
    protected $_scopeFactory;

    /**
     * @var State
     */
    protected $_state;

    /**
     * @var DirectoryList
     */
    protected $_dir;

    /**
     * @var
     */
    protected $_storeManager;

    /**
     * @var IndexerFactory
     */
    protected $_indexerFactory;

    /**
     * @var Logger
     */
    protected $_logger;

    /**
     * @var
     */
    protected $_commandOutput;

    /**
     * @var CsvFactory
     */
    protected $_csvFactory;

    /**
     * @var Filesystem
     */
    protected $_filesystem;

    /**
     * Csv constructor.
     * @param Filesystem $filesystem
     * @param CsvFactory $csvFactory
     * @param ScopeFactory $scopeFactory
     * @param State $_state
     * @param Logger $logger
     * @param DirectoryList $dir
     * @param DataObjectFactory $dataObjectFactory
     * @param IndexerFactory $indexerFactory
     */
    public function __construct(
        Filesystem $filesystem,
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
        $this->_filesystem = $filesystem;
    }

    public function getLogger()
    {
        return $this->_logger;
    }

    public function execute($configuration, $file)
    {
        $this->_logger->pushHandler(
            new \Monolog\Handler\StreamHandler(
                $this->_dir->getPath(DirectoryList::VAR_DIR) .
                '/log/tereta/import.log'
            )
        );

        $this->_logger->setHtmlOutput($this->htmlOutput);
        if ($this->_commandOutput) {
            $this->_logger->setCommandOutput($this->_commandOutput);
        }

        $this->_logger->info('Import starting...');

        $csv = $this->_csvFactory->create([
            'file'      => $file,
            'directory' => $this->_filesystem->getDirectoryRead(DirectoryList::VAR_DIR)
        ]);

        // Configurations
        $configuration->setFields($csv->getColNames());

        $csv->rewind();

        $time = time();
        $counter = 0;

        $scopeModel = $this->_scopeCreate($configuration);
        while ($csv->valid()) {
            $counter++;

            try {
                // Debug string
                //if ($counter >= 54 && $counter <= 55) { // Debug
                //    $scopeModel->collectItem($csv->current());  // Debug
                //}  // Debug

                $scopeModel->collectItem($csv->current());

                if (($counter % $configuration->getScopeLimit()) == 0) {
                    $this->_logger->info("Collected " . $counter . " records, time spent " . (time() - $time) . "sec.");
                    $scopeModel->save();
                    $scopeModel = $this->_scopeCreate($configuration);
                    $this->_logger->info("Processed " . $counter . " records, time spent " . (time() - $time) . "sec.");
                }
            }
            catch(\Exception $e) {
                $this->_logger->error($e->getMessage());
            }

            $csv->next();
        }
        if ($scopeModel->isCollected()){
            $this->_logger->info("Collected " . $counter . " records, time spent " . (time() - $time) . "sec.");
            $scopeModel->save();
            $this->_logger->info("Processed " . $counter . " records, time spent " . (time() - $time) . "sec.");
        }

        $this->_logger->info('Import finished');
    }

    /**
     * @return Updater\Scope
     */
    protected function _scopeCreate($configuration)
    {
        $scopeModel = $this->_scopeFactory->create([
            'configuration' => $configuration,
            'logger'        => $this->_logger
        ]);

        return $scopeModel;
    }

    public function setCommandOutput(OutputInterface $output)
    {
        $this->_commandOutput = $output;
        return $this;
    }

    protected $htmlOutput;

    public function setHtmlOutput($boolean)
    {
        $this->htmlOutput = $boolean;
        return $this;
    }
}