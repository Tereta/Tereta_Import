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

namespace Tereta\Import\Console;

use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tereta\Import\Model\ImportFactory;
use Tereta\Import\Model\ResourceModel\Import as ResourceImport;
use Tereta\Import\Model\ResourceModel\Import\CollectionFactory as ImportCollectionFactory;

/**
 * Tereta\Import\Console\Import
 * php bin/magento advenced:import test
 *
 * Class Import
 * @package Tereta\Import\Console
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Import extends Command
{
    const KEY_IMPORT_IDENTIFIER = 'key_import_identifier';

    /**
     * @var ImportFactory
     */
    protected $importFactory;

    /**
     * @var ResourceImport
     */
    protected $resourceImport;

    /**
     * @var ImportCollectionFactory
     */
    protected $importCollectionFactory;

    /**
     * Import constructor.
     * @param ImportCollectionFactory $importCollectionFactory
     * @param ImportFactory $importFactory
     * @param ResourceImport $resourceImport
     */
    public function __construct(ImportCollectionFactory $importCollectionFactory, ImportFactory $importFactory, ResourceImport $resourceImport)
    {
        $this->importCollectionFactory = $importCollectionFactory;
        $this->importFactory = $importFactory;
        $this->resourceImport = $resourceImport;

        parent::__construct();
    }

    /**
     *
     */
    protected function configure(): void
    {
        $this->setName('advenced:import:run')
            ->setDescription('Runs advenced import')
            ->addArgument(
                static::KEY_IMPORT_IDENTIFIER,
                InputArgument::OPTIONAL,
                'Import identifier'
            );

        parent::configure();
    }

    protected function getIdentifier(string $identifier): array
    {
        $importModel = $this->importFactory->create();
        $this->resourceImport->load($importModel, $identifier, 'identifier');
        if ($importModel->getId()) {
            return [$identifier];
        }

        if (strpos($identifier, '*') === false) {
            throw new Exception(__('The %1 import was not found.', $identifier));
        }

        while (strpos($identifier, '*') !== false) {
            $identifier = str_replace('*', '%', $identifier);
        }

        $return  = [];
        $importCollection = $this->importCollectionFactory->create();
        $importCollection->addFieldToFilter('identifier', ['like' => $identifier . '%']);
        foreach ($importCollection as $item) {
            array_push($return, $item->getIdentifier());
        }
        return $return;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $identifier = $input->getArgument(static::KEY_IMPORT_IDENTIFIER);
        $importModel = $this->importFactory->create();

        if (!$identifier) {
            foreach ($importModel->getCollection() as $item) {
                $output->writeln(str_pad($item->getData('identifier'), 50, " ") . str_pad($item->getData('name'), 50, " "));
            }

            return;
        }

        if ($output->getVerbosity() == OutputInterface::VERBOSITY_NORMAL) {
            $output->setVerbosity(OutputInterface::VERBOSITY_QUIET);
        }

        $identifier = $this->getIdentifier($identifier);

        try {
            foreach ($identifier as $identifierItem) {
                $output->write(__('Starting import for "%1"...', $identifierItem), true);
                $importModel->setCommandOutput($output);
                try {
                    $importModel->import($identifierItem);
                    $output->write(__('Finished import for "%1".', $identifierItem), true);
                } catch (Exception $e) {
                    $output->write(__('<error>Error while import for "%1". %2</error>', $identifierItem, $e->getMessage()), true);
                }
            }
        } catch (\Exception $e) {
            $output->write('<error>Stopping error: ' . $e->getMessage() . '; In: ' . $e->getFile() . ':' . $e->getLine() . '; Trace:' . $e->getTraceAsString() . '</error>', true);
        }
    }
}
