<?php

namespace Crm\CaracteristicasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\CaracteristicasBundle\Entity\Dimenciones;
use Crm\CaracteristicasBundle\Form\DimencionesType;

/**
 * Dimenciones controller.
 *
 */
class DimencionesController extends Controller
{

    /**
     * Lists all Dimenciones entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaracteristicasBundle:Dimenciones')->findAll();

        return $this->render('CaracteristicasBundle:Dimenciones:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Dimenciones entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Dimenciones();
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

            return $this->redirect($this->generateUrl('dimenciones_show', array('id' => $entity->getId())));
        }

        return $this->render('CaracteristicasBundle:Dimenciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Dimenciones entity.
     *
     * @param Dimenciones $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Dimenciones $entity)
    {
        $form = $this->createForm(new DimencionesType(), $entity, array(
            'action' => $this->generateUrl('dimenciones_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Dimenciones entity.
     *
     */
    public function newAction()
    {
        $entity = new Dimenciones();
        $form   = $this->createCreateForm($entity);

        return $this->render('CaracteristicasBundle:Dimenciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Dimenciones entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Dimenciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dimenciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:Dimenciones:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Dimenciones entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Dimenciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dimenciones entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:Dimenciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Dimenciones entity.
    *
    * @param Dimenciones $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Dimenciones $entity)
    {
        $form = $this->createForm(new DimencionesType(), $entity, array(
            'action' => $this->generateUrl('dimenciones_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Dimenciones entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Dimenciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dimenciones entity.');
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

            return $this->redirect($this->generateUrl('dimenciones'));
        }

        return $this->render('CaracteristicasBundle:Dimenciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Dimenciones entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaracteristicasBundle:Dimenciones')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dimenciones entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('dimenciones'));
    }

    /**
     * Creates a form to delete a Dimenciones entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dimenciones_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
