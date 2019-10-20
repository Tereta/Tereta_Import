<?php
namespace Tereta\Import\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tereta\Import\Cron\Scheduler as SchedulerCron;

class Scheduler extends Command
{
    protected $schedulerCron;

    public function __construct(SchedulerCron $schedulerCron, string $name = null)
    {
        $this->schedulerCron = $schedulerCron;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('advenced:import:scheduler')
            ->setDescription('Runs advenced import scheduler');

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->schedulerCron->execute();
    }
}