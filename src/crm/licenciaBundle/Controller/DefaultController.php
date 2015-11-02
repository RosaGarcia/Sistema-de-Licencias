<?php

namespace crm\licenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('licenciaBundle:Ventas:ola.html.twig');
    }
}
