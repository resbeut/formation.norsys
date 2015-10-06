<?php
// src/AppBundle/Command/GreetCommand.php
namespace ParkBundle\Command;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ComputerChangeStatusCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('parkbundle:computer:changestatus')
            ->setDescription('Change computer Status')
            ->addArgument(
                'status',
                InputArgument::OPTIONAL,
                'Quel est le nouveau status?'
            );

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $status = $input->getArgument('status');
        if ($status) {
            $text = 'Changement du park informatique au status ' . $status;
        } else {
            $text = 'Pas de status';
        }
        //if (($status == 'true') or ($status == 'false')) {
            $num_cpt = 0;
            $num_cpt_chg = 0;
            //entity manager
            $em = $this->getContainer()->get('doctrine')->getEntityManager();
            //list computers
            $computerList = $em->getRepository('ParkBundle:Computer')->findAll();
            //iteration
            foreach ($computerList as $computer) {            //iteration
                $num_cpt = $num_cpt + 1;
                $output->writeln($computer->getName());
                $output->write($computer->getEnabled());
                #$em->persist($computer);
            }
            #$em->flush();
        //}

        #$output->writeln($text);
    }
}