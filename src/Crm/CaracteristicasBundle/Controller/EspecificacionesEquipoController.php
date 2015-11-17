<?php

namespace Crm\CaracteristicasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo;
use Crm\CaracteristicasBundle\Form\EspecificacionesEquipoType;

/**
 * EspecificacionesEquipo controller.
 *
 */
class EspecificacionesEquipoController extends Controller
{

    /**
     * Lists all EspecificacionesEquipo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaracteristicasBundle:EspecificacionesEquipo')->findAll();

        return $this->render('CaracteristicasBundle:EspecificacionesEquipo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new EspecificacionesEquipo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new EspecificacionesEquipo();
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

            return $this->redirect($this->generateUrl('especificacionesequipo_show', array('id' => $entity->getId())));
        }

        return $this->render('CaracteristicasBundle:EspecificacionesEquipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a EspecificacionesEquipo entity.
     *
     * @param EspecificacionesEquipo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(EspecificacionesEquipo $entity)
    {
        $form = $this->createForm(new EspecificacionesEquipoType(), $entity, array(
            'action' => $this->generateUrl('especificacionesequipo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new EspecificacionesEquipo entity.
     *
     */
    public function newAction()
    {
        $entity = new EspecificacionesEquipo();
        $form   = $this->createCreateForm($entity);

        return $this->render('CaracteristicasBundle:EspecificacionesEquipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EspecificacionesEquipo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:EspecificacionesEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspecificacionesEquipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:EspecificacionesEquipo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EspecificacionesEquipo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:EspecificacionesEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspecificacionesEquipo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:EspecificacionesEquipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a EspecificacionesEquipo entity.
    *
    * @param EspecificacionesEquipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EspecificacionesEquipo $entity)
    {
        $form = $this->createForm(new EspecificacionesEquipoType(), $entity, array(
            'action' => $this->generateUrl('especificacionesequipo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing EspecificacionesEquipo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:EspecificacionesEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspecificacionesEquipo entity.');
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

            return $this->redirect($this->generateUrl('especificacionesequipo'));
        }

        return $this->render('CaracteristicasBundle:EspecificacionesEquipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a EspecificacionesEquipo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaracteristicasBundle:EspecificacionesEquipo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EspecificacionesEquipo entity.');
            }

            $em->remove($entity);
            $em->flush();
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('especificacionesequipo'));
    }

    /**
     * Creates a form to delete a EspecificacionesEquipo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('especificacionesequipo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
