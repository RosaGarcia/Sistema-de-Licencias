<?php

namespace Crm\CaracteristicasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\CaracteristicasBundle\Entity\VersionSoftware;
use Crm\CaracteristicasBundle\Form\VersionSoftwareType;

/**
 * VersionSoftware controller.
 *
 */
class VersionSoftwareController extends Controller
{

    /**
     * Lists all VersionSoftware entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaracteristicasBundle:VersionSoftware')->findAll();

        return $this->render('CaracteristicasBundle:VersionSoftware:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new VersionSoftware entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new VersionSoftware();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getflashBag()->add(
                                 'mensaje',
                                 'Se ha creado el registro exitosamente'
                      );

            return $this->redirect($this->generateUrl('versionsoftware_show', array('id' => $entity->getId())));
        }

        return $this->render('CaracteristicasBundle:VersionSoftware:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a VersionSoftware entity.
     *
     * @param VersionSoftware $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(VersionSoftware $entity)
    {
        $form = $this->createForm(new VersionSoftwareType(), $entity, array(
            'action' => $this->generateUrl('versionsoftware_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear','attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new VersionSoftware entity.
     *
     */
    public function newAction()
    {
        $entity = new VersionSoftware();
        $form   = $this->createCreateForm($entity);

        return $this->render('CaracteristicasBundle:VersionSoftware:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a VersionSoftware entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:VersionSoftware')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VersionSoftware entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:VersionSoftware:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing VersionSoftware entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:VersionSoftware')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VersionSoftware entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaracteristicasBundle:VersionSoftware:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a VersionSoftware entity.
    *
    * @param VersionSoftware $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(VersionSoftware $entity)
    {
        $form = $this->createForm(new VersionSoftwareType(), $entity, array(
            'action' => $this->generateUrl('versionsoftware_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing VersionSoftware entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaracteristicasBundle:VersionSoftware')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VersionSoftware entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('versionsoftware'));
        }

        return $this->render('CaracteristicasBundle:VersionSoftware:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a VersionSoftware entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaracteristicasBundle:VersionSoftware')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find VersionSoftware entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                      'mensaje',
                      'Se ha eliminado el registro exitosamente'
                    );
        }

        return $this->redirect($this->generateUrl('versionsoftware'));
    }

    /**
     * Creates a form to delete a VersionSoftware entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('versionsoftware_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')  ))
            ->getForm()
        ;
    }
}
