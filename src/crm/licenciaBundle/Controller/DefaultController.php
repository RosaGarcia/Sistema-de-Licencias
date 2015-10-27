<?php

namespace crm\licenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('licenciaBundle:Default:index.html.twig', array('name' => $name));
    }
}
