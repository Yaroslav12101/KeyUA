<?php
namespace App\Commands;

use App\Entity\Employee;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CheckSkillsCommand extends Command
{
    /**
     * Configuration of command
     */
    protected function configure()
    {
        $this
            ->setName("employee:can")
            ->setDescription("Check employee skills")
            ->addArgument('skill', InputArgument::IS_ARRAY);
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
        if ($input->getArgument('skill')) {
            $skill = $input->getArgument('skill');
        }
        $programmer = new Employee();
        $programmer->skills = ["writeCode", "testCode", "communicationWithManager"];
        $designer = new Employee();
        $designer->skills = ["communicationWithManager", "draw"];
        $tester = new Employee();
        $tester->skills = ["testCode", "communicationWithManager", "setTask"];
        $manager = new Employee;
        $manager->skills = ["setTask"];

        switch ($skill[0]) {
            case "programmer":
                $check = $programmer->searchSkills($skill[1], $programmer->skills);
                break;
            case "designer":
                $check = $designer->searchSkills($skill[1], $designer->skills);
                break;
            case "tester":
                $check = $tester->searchSkills($skill[1], $tester->skills);
                break;
            case "manager":
                $check = $manager->searchSkills($skill[1], $manager->skills);
                break;
        }
        $output->writeln($check);
        return 0;
    }
}