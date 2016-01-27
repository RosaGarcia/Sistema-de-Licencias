<?php

namespace Crm\VentasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VentasBundle:Default:index.html.twig', array('name' => $name));
    }

    public function mailAction()
    {
    	$mail = $this->send(); 
        return $this->render('VentasBundle:Default:mail.html.twig');
    }

    public function send()
    {
    	$message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('hdz.r.j.david@gmail.com')
        ->setTo(array('crowin@hotmail.com' => 'david'))
        ->setBody(
            $this->renderView(
                'VentasBundle:Default:email.txt.twig'
            )
        )
    ;
    $this->get('mailer')->send($message);
    	
        return $this->render('VentasBundle:Default:mail.html.twig');
    }

}


    /*$Request = $this->getRequest();
    	if ($Request->getMethod() == "POST"){
    		$Subject = $Request->get("Subject");
    		$email = $Request->get("email");
    		$message = $Request->get("message");

    		$mailer = $this->container-> get('mailer');
    		$tramsport = \Swift_SmtpTramport::newInstance('smtp.gmail.com',465,'ssl')
    		->setUsername('')
    		->setPassword();
    		$mailer = \Swift_Mailer::newInstance($tramport);
    		$message = \Swift_Message::newInstance('Test')
    		->setSubject($Subject)
    		->setFrom('crowin@hotmail.com')
    		->setTo($email)
    		->setBody($message);
    		$this->get('mailer')->send($message); 
    	} */