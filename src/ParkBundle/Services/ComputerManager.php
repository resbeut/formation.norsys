<?php
namespace ParkBundle\Services;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Class ComputerManager
 * @package ParkBundle\Services
 */
class ComputerManager
{

    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @param Registry $Registry
     */
    public function __construct(Registry $registry)
    {
        $this->registry = $registry;
    }

    public function getComputerList()
    {
        $em = $this->registry->getEntityManager();
        //list computers
        return $em->getRepository('ParkBundle:Computer')->findAll();

    }

}