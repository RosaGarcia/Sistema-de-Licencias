<?php

namespace Crm\ClienteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\ClienteBundle\Entity\RangoCliente;
use Crm\ClienteBundle\Form\RangoClienteType;

/**
 * RangoCliente controller.
 *
 */
class RangoClienteController extends Controller
{

    /**
     * Lists all RangoCliente entities.
     *
     */
    public function indexAction()
    {
        return $this->render('ClienteBundle:RangoCliente:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ClienteBundle:RangoCliente')->findAll();

        return $this->render('ClienteBundle:RangoCliente:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new RangoCliente entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new RangoCliente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha creado el registro exitosamente'
                            );

            return $this->redirect($this->generateUrl('rangocliente_show', array('id' => $entity->getId())));
        }

        return $this->render('ClienteBundle:RangoCliente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a RangoCliente entity.
     *
     * @param RangoCliente $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(RangoCliente $entity)
    {
        $form = $this->createForm(new RangoClienteType(), $entity, array(
            'action' => $this->generateUrl('rangocliente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new RangoCliente entity.
     *
     */
    public function newAction()
    {
        $entity = new RangoCliente();
        $form   = $this->createCreateForm($entity);

        return $this->render('ClienteBundle:RangoCliente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RangoCliente entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ClienteBundle:RangoCliente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RangoCliente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ClienteBundle:RangoCliente:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RangoCliente entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ClienteBundle:RangoCliente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RangoCliente entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ClienteBundle:RangoCliente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a RangoCliente entity.
    *
    * @param RangoCliente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RangoCliente $entity)
    {
        $form = $this->createForm(new RangoClienteType(), $entity, array(
            'action' => $this->generateUrl('rangocliente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing RangoCliente entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ClienteBundle:RangoCliente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RangoCliente entity.');
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

            return $this->redirect($this->generateUrl('rangocliente_edit', array('id' => $id)));
        }

        return $this->render('ClienteBundle:RangoCliente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a RangoCliente entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ClienteBundle:RangoCliente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RangoCliente entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('rangocliente'));
    }

    /**
     * Creates a form to delete a RangoCliente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rangocliente_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
