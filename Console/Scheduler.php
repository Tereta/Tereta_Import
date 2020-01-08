<?php
namespace Tereta\Import\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tereta\Import\Cron\Scheduler as SchedulerCron;

/**
 * Class Scheduler
 * @package Tereta\Import\Console
 */
class Scheduler extends Command
{
    /**
     * @var SchedulerCron
     */
    protected $schedulerCron;

    /**
     * Scheduler constructor.
     * @param SchedulerCron $schedulerCron
     * @param string|null $name
     */
    public function __construct(SchedulerCron $schedulerCron, string $name = null)
    {
        $this->schedulerCron = $schedulerCron;
        parent::__construct($name);
    }

    /**
     *
     */
    protected function configure()
    {
        $this->setName('advenced:import:scheduler')
            ->setDescription('Runs advenced import scheduler');

        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->schedulerCron->execute();
    }
}