<?php

namespace Crm\TicketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\TicketBundle\Entity\Ticket;
use Crm\TicketBundle\Form\TicketType;

/**
 * Ticket controller.
 *
 */
class TicketController extends Controller
{

    /**
     * Lists all Ticket entities.
     *
     */
    public function indexAction()
    {
        return $this->render('TicketBundle:Ticket:index.html.twig');
    }

     public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TicketBundle:Ticket')->findAll();

        return $this->render('TicketBundle:Ticket:listado.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function ticketAction()
    {
        return $this->render('TicketBundle:Ticket:ticket.html.twig');
    }
    /**
     * Creates a new Ticket entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ticket();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setFechaCreacion(new \DateTime("now")); 
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ticket_show', array('id' => $entity->getId())));
        }

        return $this->render('TicketBundle:Ticket:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ticket entity.
     *
     * @param Ticket $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ticket $entity)
    {
        $form = $this->createForm(new TicketType(), $entity, array(
            'action' => $this->generateUrl('ticket_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ticket entity.
     *
     */
    public function newAction()
    {
        $entity = new Ticket();
        $form   = $this->createCreateForm($entity);

        return $this->render('TicketBundle:Ticket:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ticket entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TicketBundle:Ticket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ticket entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TicketBundle:Ticket:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function ticketShowAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('TicketBundle:Ticket')->show($id);

        if (!$entities) {
            throw $this->createNotFoundException('Unable to find Ticket entity.');
        }

        return $this->render('TicketBundle:Ticket:ticketshow.html.twig', array(
            'entities'  => $entities,
        ));
    }

     public function misTicketAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $entities = $em->getRepository('TicketBundle:Ticket')->misTicket($id = $user->getId() );

        return $this->render('TicketBundle:Ticket:misticket.html.twig', array(
            'entities'  => $entities,
        ));
    }

    public function prioridadAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository("TicketBundle:Ticket")->prioridad();

        return $this->render("TicketBundle:Ticket:prioridad.html.twig",array(
            "entities" => $entities,
            ));
    }

     public function recientesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository("TicketBundle:Ticket")->findBy(array(), array('id' => 'DESC'));

        return $this->render("TicketBundle:Ticket:recientes.html.twig",array(
            "entities" => $entities,
            ));
    }
    /**
     * Displays a form to edit an existing Ticket entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TicketBundle:Ticket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ticket entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TicketBundle:Ticket:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ticket entity.
    *
    * @param Ticket $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ticket $entity)
    {
        $form = $this->createForm(new TicketType(), $entity, array(
            'action' => $this->generateUrl('ticket_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ticket entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TicketBundle:Ticket')->find($id);
        $fecha = $entity->getFechaCreacion();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ticket entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setFechaCreacion($fecha);
            $em->flush();

            return $this->redirect($this->generateUrl('ticket', array('id' => $id)));
        }

        return $this->render('TicketBundle:Ticket:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function propietarioAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $logeado = $em->getRepository('UsuariosBundle:Usuarios')->find($user->getId());
        $usuario = $logeado->getid(); 
        $entity = $em->getRepository('TicketBundle:Ticket')->find($id);

        $entity ->setPropietario($usuario);
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('ticket_general'));
    }

    /**
     * Deletes a Ticket entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TicketBundle:Ticket')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ticket entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ticket'));
    }

    /**
     * Creates a form to delete a Ticket entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ticket_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
