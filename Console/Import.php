<?php

namespace Tereta\Import\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Tereta\Import\Model\ImportFactory;

/**
 * php bin/magento advenced:import test
 */
class Import extends Command
{
    const KEY_IMPORT_IDENTIFIER = 'key_import_identifier';

    protected $_importFactory;

    public function __construct(ImportFactory $importFactory) {
        $this->_importFactory = $importFactory;
        
        parent::__construct();
    }
    
    protected function configure()
    {
        $this->setName('advenced:import')
            ->setDescription('Runs advenced import')
            ->addArgument(
                static::KEY_IMPORT_IDENTIFIER,
                InputArgument::OPTIONAL,
                'Import identifier'
            );
        
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $identifier = $input->getArgument(static::KEY_IMPORT_IDENTIFIER);
        $importModel = $this->_importFactory->create();

        if (!$identifier) {
            foreach($importModel->getCollection() as $item){
                $output->writeln(str_pad($item->getData('identifier'),50," ") . str_pad($item->getData('name'),50," "));
            }

            return;
        }

        if ($output->getVerbosity() == OutputInterface::VERBOSITY_NORMAL) {
            $output->setVerbosity(OutputInterface::VERBOSITY_QUIET);
        }
        
        $output->write('Starting import for "' . $identifier . '"...', true);
        try {
            $importModel->setCommandOutput($output);
            $importModel->import($identifier);
            $output->write('Finished import for "' . $identifier . '".', true);
        } catch (\Exception $e) {
            $output->write('<error>Stopping error: ' . $e->getMessage() . '; In: ' . $e->getFile() . ':' . $e->getLine() . '; Trace:' . $e->getTraceAsString() . '</error>', true);
        }
    }
}