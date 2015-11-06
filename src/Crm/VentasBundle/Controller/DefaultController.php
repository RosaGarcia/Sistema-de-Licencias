<?php

namespace Crm\VentasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VentasBundle:Default:index.html.twig', array('name' => $name));
    }
}
