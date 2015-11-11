<?php

namespace Crm\CaracteristicasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\CaracteristicasBundle\Entity\Capacidad;
use Crm\CaracteristicasBundle\Form\CapacidadType;

/**
 * Capacidad controller.
 *
 */
class CapacidadController extends Controller
{

    /**
     * Lists all Capacidad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaracteristicasBundle:Capacidad')->findAll();

        return $this->render('CaracteristicasBundle:Capacidad:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Capacidad entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Capacidad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('capacidad_show', array('id' => $entity->getId())));
        }

        return $this->render('CaracteristicasBundle:Capacidad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Capacidad entity.
     *
     * @param Capacidad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Capacidad $entity)
    {
        $form = $this->createForm(new CapacidadType(), $entity, array(
            'action' => $this->generateUrl('capacidad_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Capacidad entity.
     *
     */
    public function newAction()
    {
        $entity = new Capacidad();
        $form   = $this->createCreateForm($entity);

        return $this->render('CaracteristicasBundle:Capacidad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Capacidad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Capacidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capacidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:Capacidad:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Capacidad entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Capacidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capacidad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:Capacidad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Capacidad entity.
    *
    * @param Capacidad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Capacidad $entity)
    {
        $form = $this->createForm(new CapacidadType(), $entity, array(
            'action' => $this->generateUrl('capacidad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Capacidad entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:Capacidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capacidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('capacidad_edit', array('id' => $id)));
        }

        return $this->render('CaracteristicasBundle:Capacidad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Capacidad entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaracteristicasBundle:Capacidad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Capacidad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('capacidad'));
    }

    /**
     * Creates a form to delete a Capacidad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('capacidad_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
