<?php

namespace Crm\ProductoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\ProductoBundle\Entity\Termino;
use Crm\ProductoBundle\Form\TerminoType;

/**
 * Termino controller.
 *
 */
class TerminoController extends Controller
{

    /**
     * Lists all Termino entities.
     *
     */
    public function indexAction()
    {
       return $this->render('ProductoBundle:Termino:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductoBundle:Termino')->findAll();

        return $this->render('ProductoBundle:Termino:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Termino entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Termino();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('termino_show', array('id' => $entity->getId())));
        }

        return $this->render('ProductoBundle:Termino:dnew.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Termino entity.
     *
     * @param Termino $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Termino $entity)
    {
        $form = $this->createForm(new TerminoType(), $entity, array(
            'action' => $this->generateUrl('termino_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Termino entity.
     *
     */
    public function newAction()
    {
        $entity = new Termino();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProductoBundle:Termino:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Termino entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:Termino')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Termino entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductoBundle:Termino:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Termino entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:Termino')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Termino entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductoBundle:Termino:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Termino entity.
    *
    * @param Termino $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Termino $entity)
    {
        $form = $this->createForm(new TerminoType(), $entity, array(
            'action' => $this->generateUrl('termino_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Termino entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:Termino')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Termino entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('termino_edit', array('id' => $id)));
        }

        return $this->render('ProductoBundle:Termino:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Termino entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductoBundle:Termino')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Termino entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('termino'));
    }

    /**
     * Creates a form to delete a Termino entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('termino_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
