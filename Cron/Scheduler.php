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

namespace Tereta\Import\Cron;

use Magento\Cron\Model\ScheduleFactory as ScheduleFactory;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Psr\Log\LoggerInterface;
use Tereta\Import\Model\ImportFactory;
use Exception;

/**
 * Tereta\Import\Cron\Scheduler
 *
 * Class Scheduler
 * @package Tereta\Import\Cron
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Scheduler
{
    /**
     * @var ImportFactory
     */
    protected $importFactory;

    /**
     * @var DateTime
     */
    protected $dateTime;

    /**
     * @var ScheduleFactory
     */
    protected $modelScheduleFactory;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Scheduler constructor.
     * @param LoggerInterface $logger
     * @param ImportFactory $importFactory
     * @param DateTime $dateTime
     * @param ScheduleFactory $modelScheduleFactory
     */
    public function __construct(LoggerInterface $logger, ImportFactory $importFactory, DateTime $dateTime, ScheduleFactory $modelScheduleFactory)
    {
        $this->importFactory = $importFactory;
        $this->dateTime = $dateTime;
        $this->modelScheduleFactory = $modelScheduleFactory;
        $this->logger = $logger;
    }

    /**
     * @throws Exception
     */
    public function execute(): void
    {
        $scopeTime = $startTime = $endTime = null;

        $processedImports = [];
        do {
            $startTime = $this->dateTime->timestamp();
            if ($scopeTime) {
                $processed = $this->executeModels($processedImports, $scopeTime);
            } else {
                $processed = $this->executeModels($processedImports, $startTime);
            }
            $endTime = $this->dateTime->timestamp();

            $scopeTime = $this->generateScopeTime($startTime, $endTime);
        } while ($processed);
    }

    /**
     * @param $startTime
     * @param $endTime
     * @return array
     */
    protected function generateScopeTime($startTime, $endTime): array
    {
        $timeScope = [];
        for ($step = $startTime; $step <= $endTime; $step = $step + 60) {
            array_push($timeScope, $step);
        }

        return $timeScope;
    }

    /**
     * @param $processedImports
     * @param $currentTimeArray
     * @return array
     * @throws Exception;
     */
    protected function executeModels(&$processedImports, $currentTimeArray): array
    {
        $processed = [];
        if (!is_array($currentTimeArray)) {
            $currentTimeArray = [$currentTimeArray];
        }
        $importCollection = $this->importFactory->create()->getCollection();
        $importCollection->addFieldToFilter('is_active', 1);

        foreach ($currentTimeArray as $currentTime) {
            foreach ($importCollection as $importModel) {
                if (!trim($importModel->getData('cron_expression'))) {
                    continue;
                }

                try {
                    $modelSchedule = $this->modelScheduleFactory->create();
                    $modelSchedule->setScheduledAt($currentTime);
                    $modelSchedule->setCronExpr($importModel->getData('cron_expression'));
                    if ($modelSchedule->trySchedule()) {
                        $importIdentifier = $importModel->getData('identifier');
                        if (in_array($importIdentifier, $processedImports)) {
                            continue;
                        }

                        array_push($processed, $importIdentifier);
                        array_push($processedImports, $importIdentifier);
                        $time = time();
                        $this->logger->debug('Starting the "' . $importIdentifier . '" import.');
                        $importModel->import($importIdentifier);
                        $this->logger->debug('Finished the "' . $importIdentifier . '" import in ' . (time() - $time) . 'sec.');
                    }
                } catch (\Exception $e) {
                    $this->logger->error('The "' . $importIdentifier . '" can not be processed , message: "' . $e->getMessage() . '"');
                }
            }
        }

        return $processed;
    }
}
