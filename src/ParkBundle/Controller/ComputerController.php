<?php

namespace ParkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ComputerController extends Controller
{
    /**
     * @Route("/computer", name="park_computer")
     */
    public function indexAction()
    {

        $computers = $this->getComputerList();
        return $this->render('ParkBundle:Computer:index.html.twig', array(
            'computers' => $computers,
        ));
    }

    protected function getComputerList()
    {
        return array(
            0 => array(
                'id' => 1,
                'name' => 'Serveur ',
                'ip' => '192.168.0.1',
                'type' => 'Server',
                'OS' => 'Windows 2003',
                'enabled' => true
            ),
            1 => array(
                'id' => 2,
                'name' => 'Ordinateur 2',
                'ip' => '192.168.0.2',
                'type' => 'Server',
                'OS' => 'Windows XP',
                'enabled' => false
            ),
            2 => array(
                'id' => 3,
                'name' => 'OPC invite',
                'ip' => '192.168.0.3',
                'type' => 'Server',
                'OS' => 'Windows 10',
                'enabled' => true
            ),
            3 => array(
                'id' => 4,
                'name' => 'Ordinateur 4',
                'ip' => '192.168.0.4',
                'type' => 'PC',
                'OS' => 'Windows 7',
                'enabled' => false
            ),
            4 => array(
                'id' => 5,
                'name' => 'Database Serveur',
                'ip' => '192.168.0.5',
                'type' => 'Server',
                'OS' => 'Redhat 6',
                'enabled' => true
            ),
        );
    }
}
