<?php

namespace Crm\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\GeneralBundle\Entity\Estatus;
use Crm\GeneralBundle\Form\EstatusType;

/**
 * Estatus controller.
 *
 */
class EstatusController extends Controller
{

    /**
     * Lists all Estatus entities.
     *
     */
    public function indexAction()
    {
         return $this->render('GeneralBundle:Estatus:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GeneralBundle:Estatus')->findAll();

        return $this->render('GeneralBundle:Estatus:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Estatus entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Estatus();
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

            return $this->redirect($this->generateUrl('estatus_show', array('id' => $entity->getId())));
        }

        return $this->render('GeneralBundle:Estatus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Estatus entity.
     *
     * @param Estatus $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Estatus $entity)
    {
        $form = $this->createForm(new EstatusType(), $entity, array(
            'action' => $this->generateUrl('estatus_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Estatus entity.
     *
     */
    public function newAction()
    {
        $entity = new Estatus();
        $form   = $this->createCreateForm($entity);

        return $this->render('GeneralBundle:Estatus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Estatus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GeneralBundle:Estatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estatus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GeneralBundle:Estatus:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Estatus entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GeneralBundle:Estatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estatus entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GeneralBundle:Estatus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Estatus entity.
    *
    * @param Estatus $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Estatus $entity)
    {
        $form = $this->createForm(new EstatusType(), $entity, array(
            'action' => $this->generateUrl('estatus_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Estatus entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GeneralBundle:Estatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estatus entity.');
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

            return $this->redirect($this->generateUrl('estatus'));
        }

        return $this->render('GeneralBundle:Estatus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Estatus entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GeneralBundle:Estatus')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Estatus entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('estatus'));
    }

    /**
     * Creates a form to delete a Estatus entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estatus_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
