<?php

namespace Crm\ProductoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\ProductoBundle\Entity\TipoLicencia;
use Crm\ProductoBundle\Form\TipoLicenciaType;

/**
 * TipoLicencia controller.
 *
 */
class TipoLicenciaController extends Controller
{

    /**
     * Lists all TipoLicencia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductoBundle:TipoLicencia')->findAll();

        return $this->render('ProductoBundle:TipoLicencia:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoLicencia entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoLicencia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipolicencia_show', array('id' => $entity->getId())));
        }

        return $this->render('ProductoBundle:TipoLicencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoLicencia entity.
     *
     * @param TipoLicencia $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoLicencia $entity)
    {
        $form = $this->createForm(new TipoLicenciaType(), $entity, array(
            'action' => $this->generateUrl('tipolicencia_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoLicencia entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoLicencia();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProductoBundle:TipoLicencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoLicencia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:TipoLicencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoLicencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductoBundle:TipoLicencia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoLicencia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:TipoLicencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoLicencia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductoBundle:TipoLicencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoLicencia entity.
    *
    * @param TipoLicencia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoLicencia $entity)
    {
        $form = $this->createForm(new TipoLicenciaType(), $entity, array(
            'action' => $this->generateUrl('tipolicencia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoLicencia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductoBundle:TipoLicencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoLicencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipolicencia_edit', array('id' => $id)));
        }

        return $this->render('ProductoBundle:TipoLicencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoLicencia entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductoBundle:TipoLicencia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoLicencia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipolicencia'));
    }

    /**
     * Creates a form to delete a TipoLicencia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipolicencia_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
