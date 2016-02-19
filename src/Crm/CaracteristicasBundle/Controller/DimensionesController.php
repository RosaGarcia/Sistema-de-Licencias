<?php

namespace Crm\CaracteristicasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\CaracteristicasBundle\Entity\Dimensiones;
use Crm\CaracteristicasBundle\Form\DimensionesType;

/**
 * Dimensiones controller.
 *
 */
class DimensionesController extends Controller
{

    /**
     * Lists all Dimensiones entities.
     *
     */
    public function indexAction()
    {
        return $this->render('CaracteristicasBundle:Dimensiones:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaracteristicasBundle:Dimensiones')->findAll();

        return $this->render('CaracteristicasBundle:Dimensiones:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Dimensiones entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Dimensiones();
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

            return $this->redirect($this->generateUrl('dimensiones_show', array('id' => $entity->getId())));
        }

        return $this->render('CaracteristicasBundle:Dimensiones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Dimensiones entity.
     *
     * @param Dimensiones $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Dimensiones $entity)
    {
        $form = $this->createForm(new DimensionesType(), $entity, array(
            'action' => $this->generateUrl('dimensiones_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Dimensiones entity.
     *
     */
    public function newAction()
    {
        $entity = new Dimensiones();
        $form   = $this->createCreateForm($entity);

        return $this->render('CaracteristicasBundle:Dimensiones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Dimensiones entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Dimensiones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dimensiones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:Dimensiones:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Dimensiones entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Dimensiones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dimensiones entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:Dimensiones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Dimensiones entity.
    *
    * @param Dimensiones $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Dimensiones $entity)
    {
        $form = $this->createForm(new DimensionesType(), $entity, array(
            'action' => $this->generateUrl('dimensiones_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Dimensiones entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Dimensiones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dimensiones entity.');
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

            return $this->redirect($this->generateUrl('dimensiones'));
        }

        return $this->render('CaracteristicasBundle:Dimensiones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Dimensiones entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaracteristicasBundle:Dimensiones')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dimensiones entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('dimensiones'));
    }

    /**
     * Creates a form to delete a Dimensiones entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dimensiones_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
