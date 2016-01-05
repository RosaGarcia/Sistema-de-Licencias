<?php

namespace Crm\PersonalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\PersonalBundle\Entity\DireccionPersonal;
use Crm\PersonalBundle\Form\DireccionPersonalType;

/**
 * DireccionPersonal controller.
 *
 */
class DireccionPersonalController extends Controller
{

    /**
     * Lists all DireccionPersonal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PersonalBundle:DireccionPersonal')->findAll();

        return $this->render('PersonalBundle:DireccionPersonal:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DireccionPersonal entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DireccionPersonal();
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

            return $this->redirect($this->generateUrl('personal_show', array('id' => $entity->getId())));
        }

        return $this->render('PersonalBundle:DireccionPersonal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DireccionPersonal entity.
     *
     * @param DireccionPersonal $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DireccionPersonal $entity)
    {
        $form = $this->createForm(new DireccionPersonalType(), $entity, array(
            'action' => $this->generateUrl('direccionpersonal_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new DireccionPersonal entity.
     *
     */
    public function newAction()
    {
        $entity = new DireccionPersonal();
        $form   = $this->createCreateForm($entity);

        return $this->render('PersonalBundle:DireccionPersonal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DireccionPersonal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:DireccionPersonal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionPersonal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonalBundle:DireccionPersonal:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DireccionPersonal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:DireccionPersonal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionPersonal entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonalBundle:DireccionPersonal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DireccionPersonal entity.
    *
    * @param DireccionPersonal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DireccionPersonal $entity)
    {
        $form = $this->createForm(new DireccionPersonalType(), $entity, array(
            'action' => $this->generateUrl('direccionpersonal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing DireccionPersonal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:DireccionPersonal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionPersonal entity.');
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

            return $this->redirect($this->generateUrl('personal_show', array('id' => $entity->getId())));
        }

        return $this->render('PersonalBundle:DireccionPersonal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DireccionPersonal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PersonalBundle:DireccionPersonal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DireccionPersonal entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('direccionpersonal'));
    }

    /**
     * Creates a form to delete a DireccionPersonal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direccionpersonal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
