<?php
namespace Crm\UsuariosBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Crm\UsuariosBundle\Entity\Usuarios;
use Crm\UsuariosBundle\Form\UsuariosType;
 
class SecurityController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
 
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
         $em = $this->getDoctrine()->getManager();

            return $this->render('UsuariosBundle:Security:login.html.twig',
                array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error'         => $error,
                )
            );
    }

}