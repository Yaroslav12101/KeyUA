<?php
namespace App\Commands;

use App\Entity\Employee;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class MyCommand extends Command
{
    /**
     * Configuration of command
     */
    protected function configure()
    {
        $this
            ->setName("company:employee")
            ->setDescription("Show employee skills")
            ->addArgument('employee', InputArgument::REQUIRED);
        ;
    }

    /**
     * Execute method of command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($input->getArgument('employee')) {
            $employee = $input->getArgument('employee');
        }
        $programmer = new Employee();
        $programmer->skills = ["code writing", "code testing", "communication with manager"];
        $designer = new Employee();
        $designer->skills = ["communication with manager", "draw"];
        $tester = new Employee();
        $tester->skills = ["code testing", "communication with manager", "task setting"];
        $manager = new Employee;
        $manager->skills = ["task setting"];
        switch ($employee) {
            case "programmer":
                $view = $programmer->skills;
                break;
            case "designer":
                $view = $designer->skills;
                break;
            case "tester":
                $view = $tester->skills;
                break;
            case "manager":
                $view = $manager->skills;
                break;
        }
        $output->writeln($view);
        return 0;
    }
}