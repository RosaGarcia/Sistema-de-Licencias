<?php

namespace Crm\UsuariosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\UsuariosBundle\Entity\Avisos;
use Crm\UsuariosBundle\Form\AvisosType;

/**
 * Avisos controller.
 *
 */
class AvisosController extends Controller
{

    /**
     * Lists all Avisos entities.
     *
     */
    public function indexAction()
    {
        return $this->render('UsuariosBundle:Avisos:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $logeado = $em->getRepository('UsuariosBundle:Usuarios')->find($user->getId());
        $id = $logeado->getid();

        $entities = $em->getRepository('UsuariosBundle:Avisos')->avisosCreados($id);

        return $this->render('UsuariosBundle:Avisos:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Avisos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Avisos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $user = $this->container->get('security.context')->getToken()->getUser();

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $logeado = $em->getRepository('UsuariosBundle:Usuarios')->find($user->getId());   
            $usuario = $logeado->getid();
            $entity -> setUsuarioCreo($usuario);
            $entity->setFechaCreacion(new \DateTime("now"));
            $em->flush();
            $destino = $em->getRepository('PersonalBundle:Personal')->email($id = $entity->getUsuarios());
            foreach ($destino as $email)
            {
                $correo = $email->getEmail();
            }
            $mail = $this->send($entity,$correo);
           
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha creado el registro exitosamente'
                            );

            return $this->redirect($this->generateUrl('avisos_show', array('id' => $entity->getId())));
        }

        return $this->render('UsuariosBundle:Avisos:dnew.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Avisos entity.
     *
     * @param Avisos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Avisos $entity)
    {
        $form = $this->createForm(new AvisosType(), $entity, array(
            'action' => $this->generateUrl('avisos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Avisos entity.
     *
     */
    public function newAction()
    {
        $entity = new Avisos();
        $form   = $this->createCreateForm($entity);

        return $this->render('UsuariosBundle:Avisos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function send($entity,$correo)
    {
        $message = \Swift_Message::newInstance()
        ->setSubject('Aviso')
        ->setFrom('hdz.r.j.david@gmail.com')
        ->setTo($correo)
        ->setBody(
            $this->renderView(
                'UsuariosBundle:Avisos:mail.html.twig',array('entity' => $entity)),'text/html'
            );
        $this->get('mailer')->send($message);
    }

    /**
     * Finds and displays a Avisos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuariosBundle:Avisos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avisos entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UsuariosBundle:Avisos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function avisosAction()
    {
        return $this->render('UsuariosBundle:Avisos:avisos.html.twig');
    }

    public function nuevoAvisoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $miAviso = $em->getRepository('UsuariosBundle:Avisos')->nuevoAviso($user->getId());

        return $this->render('UsuariosBundle:Avisos:nuevoaviso.html.twig',array(
            "entities" => $miAviso,
            ));
    }

    public function avisosShowAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('UsuariosBundle:Avisos')->aviso($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avisos entity.');
        }
       
 
        return $this->render('UsuariosBundle:Avisos:avisoshow.html.twig', array(
            'entities'  => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing Avisos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuariosBundle:Avisos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avisos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UsuariosBundle:Avisos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Avisos entity.
    *
    * @param Avisos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Avisos $entity)
    {
        $form = $this->createForm(new AvisosType(), $entity, array(
            'action' => $this->generateUrl('avisos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Avisos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuariosBundle:Avisos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avisos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha editado el registro exitosamente'
                            );

            return $this->redirect($this->generateUrl('avisos'));
        }

        return $this->render('UsuariosBundle:Avisos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Avisos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UsuariosBundle:Avisos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Avisos entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('avisos'));
    }

    /**
     * Creates a form to delete a Avisos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('avisos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
