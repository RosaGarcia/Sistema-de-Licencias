<?php

namespace Crm\CaracteristicasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\CaracteristicasBundle\Entity\DiscoDuro;
use Crm\CaracteristicasBundle\Form\DiscoDuroType;

/**
 * DiscoDuro controller.
 *
 */
class DiscoDuroController extends Controller
{

    /**
     * Lists all DiscoDuro entities.
     *
     */
    public function indexAction()
    {
        return $this->render('CaracteristicasBundle:DiscoDuro:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaracteristicasBundle:DiscoDuro')->findAll();

        return $this->render('CaracteristicasBundle:DiscoDuro:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DiscoDuro entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DiscoDuro();
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

            return $this->redirect($this->generateUrl('discoduro_show', array('id' => $entity->getId())));
        }

        return $this->render('CaracteristicasBundle:DiscoDuro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DiscoDuro entity.
     *
     * @param DiscoDuro $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DiscoDuro $entity)
    {
        $form = $this->createForm(new DiscoDuroType(), $entity, array(
            'action' => $this->generateUrl('discoduro_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear','attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new DiscoDuro entity.
     *
     */
    public function newAction()
    {
        $entity = new DiscoDuro();
        $form   = $this->createCreateForm($entity);

        return $this->render('CaracteristicasBundle:DiscoDuro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DiscoDuro entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:DiscoDuro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DiscoDuro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:DiscoDuro:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DiscoDuro entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:DiscoDuro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DiscoDuro entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:DiscoDuro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DiscoDuro entity.
    *
    * @param DiscoDuro $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DiscoDuro $entity)
    {
        $form = $this->createForm(new DiscoDuroType(), $entity, array(
            'action' => $this->generateUrl('discoduro_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing DiscoDuro entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:DiscoDuro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DiscoDuro entity.');
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

            return $this->redirect($this->generateUrl('discoduro'));
        }

        return $this->render('CaracteristicasBundle:DiscoDuro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DiscoDuro entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaracteristicasBundle:DiscoDuro')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DiscoDuro entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('discoduro'));
    }

    /**
     * Creates a form to delete a DiscoDuro entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('discoduro_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
