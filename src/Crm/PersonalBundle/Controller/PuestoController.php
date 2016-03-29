<?php

namespace Crm\PersonalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\PersonalBundle\Entity\Puesto;
use Crm\PersonalBundle\Form\PuestoType;

/**
 * Puesto controller.
 *
 */
class PuestoController extends Controller
{

    /**
     * Lists all Puesto entities.
     *
     */
    public function indexAction()
    {
        return $this->render('PersonalBundle:Puesto:index.html.twig');
    }

    public function listadoAction(){
       $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PersonalBundle:Puesto')->findAll();

        return $this->render('PersonalBundle:Puesto:listado.html.twig', array(
            'entities' => $entities,
        )); 
    }
    /**
     * Creates a new Puesto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Puesto();
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

            return $this->redirect($this->generateUrl('puesto_show', array('id' => $entity->getId())));
        }

        return $this->render('PersonalBundle:Puesto:dnew.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Puesto entity.
     *
     * @param Puesto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Puesto $entity)
    {
        $form = $this->createForm(new PuestoType(), $entity, array(
            'action' => $this->generateUrl('puesto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Puesto entity.
     *
     */
    public function newAction()
    {
        $entity = new Puesto();
        $form   = $this->createCreateForm($entity);

        return $this->render('PersonalBundle:Puesto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Puesto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:Puesto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Puesto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonalBundle:Puesto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Puesto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:Puesto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Puesto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonalBundle:Puesto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Puesto entity.
    *
    * @param Puesto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Puesto $entity)
    {
        $form = $this->createForm(new PuestoType(), $entity, array(
            'action' => $this->generateUrl('puesto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Puesto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:Puesto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Puesto entity.');
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

            return $this->redirect($this->generateUrl('puesto'));
        }

        return $this->render('PersonalBundle:Puesto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Puesto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PersonalBundle:Puesto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Puesto entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('puesto'));
    }

    /**
     * Creates a form to delete a Puesto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('puesto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
