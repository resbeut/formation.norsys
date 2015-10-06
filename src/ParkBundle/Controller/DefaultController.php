<?php

namespace ParkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route(
     *  "/hello/{name}",
     * name="default_hello",
     * requirements={
     *         "name": "[a-zA-Z]+"
     *     }
     * )
     */
    public function indexAction($name)
    {
        return $this->render('ParkBundle:Default:index.html.twig', array('name' => $name));
    }


}
