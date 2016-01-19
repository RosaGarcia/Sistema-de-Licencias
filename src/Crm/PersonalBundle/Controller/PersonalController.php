<?php

namespace Crm\PersonalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\PersonalBundle\Entity\Personal;
use Crm\PersonalBundle\Form\PersonalType;

/**
 * Personal controller.
 *
 */
class PersonalController extends Controller
{

    /**
     * Lists all Personal entities.
     *
     */
    public function indexAction()
    {
       return $this->render('PersonalBundle:Personal:index.html.twig');
    }

    public function listadoAction()
    {
         $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PersonalBundle:Personal')->findAll();

        return $this->render('PersonalBundle:Personal:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Personal entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Personal();
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

        return $this->render('PersonalBundle:Personal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Personal entity.
     *
     * @param Personal $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Personal $entity)
    {
        $form = $this->createForm(new PersonalType(), $entity, array(
            'action' => $this->generateUrl('personal_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Personal entity.
     *
     */
    public function newAction()
    {
        $entity = new Personal();
        $form   = $this->createCreateForm($entity);

        return $this->render('PersonalBundle:Personal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Personal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        //$entity = $em->getRepository('PersonalBundle:Personal')->find($id);
        $query = $em -> createQuery('SELECT p, dp FROM PersonalBundle:DireccionPersonal dp JOIN dp.personal p WHERE p.id = :id')->setParameter('id',$id);
        $entity = $query -> getResult();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonalBundle:Personal:show.html.twig', array(
            'entities'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Personal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personal entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PersonalBundle:Personal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Personal entity.
    *
    * @param Personal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Personal $entity)
    {
        $form = $this->createForm(new PersonalType(), $entity, array(
            'action' => $this->generateUrl('personal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Personal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personal entity.');
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

            return $this->redirect($this->generateUrl('personal'));
        }

        return $this->render('PersonalBundle:Personal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Personal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PersonalBundle:Personal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Personal entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );

        }

        return $this->redirect($this->generateUrl('personal'));
    }

    /**
     * Creates a form to delete a Personal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
