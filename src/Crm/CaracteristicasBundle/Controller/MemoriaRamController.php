<?php

namespace Crm\CaracteristicasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\CaracteristicasBundle\Entity\MemoriaRam;
use Crm\CaracteristicasBundle\Form\MemoriaRamType;

/**
 * MemoriaRam controller.
 *
 */
class MemoriaRamController extends Controller
{

    /**
     * Lists all MemoriaRam entities.
     *
     */
    public function indexAction()
    {
        return $this->render('CaracteristicasBundle:MemoriaRam:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaracteristicasBundle:MemoriaRam')->findAll();

        return $this->render('CaracteristicasBundle:MemoriaRam:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new MemoriaRam entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new MemoriaRam();
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

            return $this->redirect($this->generateUrl('memoriaram_show', array('id' => $entity->getId())));
        }

        return $this->render('CaracteristicasBundle:MemoriaRam:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MemoriaRam entity.
     *
     * @param MemoriaRam $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MemoriaRam $entity)
    {
        $form = $this->createForm(new MemoriaRamType(), $entity, array(
            'action' => $this->generateUrl('memoriaram_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new MemoriaRam entity.
     *
     */
    public function newAction()
    {
        $entity = new MemoriaRam();
        $form   = $this->createCreateForm($entity);

        return $this->render('CaracteristicasBundle:MemoriaRam:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a MemoriaRam entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:MemoriaRam')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MemoriaRam entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:MemoriaRam:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MemoriaRam entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:MemoriaRam')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MemoriaRam entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:MemoriaRam:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MemoriaRam entity.
    *
    * @param MemoriaRam $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MemoriaRam $entity)
    {
        $form = $this->createForm(new MemoriaRamType(), $entity, array(
            'action' => $this->generateUrl('memoriaram_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing MemoriaRam entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:MemoriaRam')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MemoriaRam entity.');
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

            return $this->redirect($this->generateUrl('memoriaram'));
        }

        return $this->render('CaracteristicasBundle:MemoriaRam:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MemoriaRam entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaracteristicasBundle:MemoriaRam')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MemoriaRam entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('memoriaram'));
    }

    /**
     * Creates a form to delete a MemoriaRam entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('memoriaram_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
