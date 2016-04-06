<?php

namespace Crm\TicketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\TicketBundle\Entity\Comentarios;
use Crm\TicketBundle\Form\ComentariosType;
/*use Crm\TicketBundle\Entity\Ticket;
use Crm\TicketBundle\Form\TicketType;*/
/**
 * Comentarios controller.
 *
 */
class ComentariosController extends Controller
{

    /**
     * Lists all Comentarios entities.
     *
     */
    public function indexAction()
    {
        return $this->render('TicketBundle:Comentarios:index.html.twig');
    }
     public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TicketBundle:Comentarios')->findAll();

        return $this->render('TicketBundle:Comentarios:listado.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function listaComentariosAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TicketBundle:Comentarios')->comentarioTicket($id);

        return $this->render('TicketBundle:Comentarios:listacomentarios.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Comentarios entity.
     *
     */
    public function createAction(Request $request, $id)
    {
        $entity = new Comentarios();
        $form = $this->createCreateForm($entity, $id);
        $form->handleRequest($request);
        $user = $this->container->get('security.context')->getToken()->getUser();
        $ticket = $this->buscaTicket($id);


        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setFechaCreacion(new \DateTime("now"));
            $logeado = $em->getRepository('UsuariosBundle:Usuarios')->find($user->getId());   
            $usuario = $logeado->getid();
            $entity -> setUsuarioCreo($usuario);
            $entity -> setTicket($ticket); 
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ticket_show', array('id' => $entity->getId())));
        }

        return $this->render('TicketBundle:Comentarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'ticket' => $ticket,
        ));
    }

    /**
     * Creates a form to create a Comentarios entity.
     *
     * @param Comentarios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Comentarios $entity, $id)
    {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('comentarios_create',array('id'=>$id)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Comentarios entity.
     *
     */
    public function newAction($id)
    {
        $entity = new Comentarios();
        $form   = $this->createCreateForm($entity, $id);
        $ticket = $this->buscaTicket($id);

        return $this->render('TicketBundle:Comentarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    private function buscaTicket($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository('TicketBundle:Ticket')->find($id);

        return $ticket;
    }
    /**
     * Finds and displays a Comentarios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TicketBundle:Comentarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TicketBundle:Comentarios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Comentarios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TicketBundle:Comentarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentarios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TicketBundle:Comentarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Comentarios entity.
    *
    * @param Comentarios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Comentarios $entity)
    {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('comentarios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Comentarios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TicketBundle:Comentarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('comentarios_edit', array('id' => $id)));
        }

        return $this->render('TicketBundle:Comentarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Comentarios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TicketBundle:Comentarios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comentarios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comentarios'));
    }

    /**
     * Creates a form to delete a Comentarios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comentarios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
