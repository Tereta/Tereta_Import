<?php
namespace Tereta\Import\Cron;

use Tereta\Import\Model\ImportFactory;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Cron\Model\ScheduleFactory as ScheduleFactory;
use Psr\Log\LoggerInterface;

/**
 * Class Scheduler
 * @package Tereta\Import\Cron
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
    public function __construct(LoggerInterface $logger, ImportFactory $importFactory,  DateTime $dateTime, ScheduleFactory $modelScheduleFactory)
    {
        $this->importFactory = $importFactory;
        $this->dateTime = $dateTime;
        $this->modelScheduleFactory = $modelScheduleFactory;
        $this->logger = $logger;
    }

    /**
     *
     */
    public function execute()
    {
        $scopeTime = $startTime = $endTime = null;

        $processedImports = [];
        do {
            $startTime = $this->dateTime->timestamp();
            if ($scopeTime) {
                $processed = $this->executeModels($processedImports, $scopeTime);
            }
            else {
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
    protected function generateScopeTime($startTime, $endTime)
    {
        $timeScope = [];
        for($step = $startTime; $step <= $endTime; $step = $step + 60) {
            array_push($timeScope, $step);
        }

        return $timeScope;
    }

    /**
     * @param $processedImports
     * @param $currentTimeArray
     * @return array
     * @throws \Magento\Framework\Exception\CronException
     */
    protected function executeModels(&$processedImports, $currentTimeArray)
    {
        $processed = [];
        if (!is_array($currentTimeArray)) {
            $currentTimeArray = [$currentTimeArray];
        }
        $importCollection = $this->importFactory->create()->getCollection();

        foreach($currentTimeArray as $currentTime){
            foreach($importCollection as $importModel){
                if (!trim($importModel->getData('cron_expression'))) {
                    continue;
                }

                $modelSchedule = $this->modelScheduleFactory->create();
                $modelSchedule->setScheduledAt($currentTime);
                $modelSchedule->setCronExpr($importModel->getData('cron_expression'));
                if ($modelSchedule->trySchedule()) {
                    try{
                        $importIdentifier = $importModel->getData('identifier');
                        if (in_array($importIdentifier, $processedImports)) {
                            continue;
                        }

                        array_push($processed, $importIdentifier);
                        array_push($processedImports, $importIdentifier);
                        $time = time();
                        $this->logger->debug('Starting the "' . $importIdentifier . '" import.');
                        $importModel->afterLoad();
                        $importModel->import();
                        $this->logger->debug('Finished the "' . $importIdentifier . '" import in ' . (time() - $time) . 'sec.');
                    }
                    catch(\Exception $e){
                        $this->logger->error('The "' . $importIdentifier . '" can not be processed , message: "' . $e->getMessage() . '"');
                    }
                }
            }
        }

        return $processed;
    }
}