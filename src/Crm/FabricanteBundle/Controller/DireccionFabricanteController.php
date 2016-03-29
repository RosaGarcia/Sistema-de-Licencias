<?php

namespace Crm\FabricanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\FabricanteBundle\Entity\DireccionFabricante;
use Crm\FabricanteBundle\Form\DireccionFabricanteType;

/**
 * DireccionFabricante controller.
 *
 */
class DireccionFabricanteController extends Controller
{

    /**
     * Lists all DireccionFabricante entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FabricanteBundle:DireccionFabricante')->findAll();

        return $this->render('FabricanteBundle:DireccionFabricante:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DireccionFabricante entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DireccionFabricante();
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

            return $this->redirect($this->generateUrl('fabricante_show', array('id' => $entity->getId())));
        }

        return $this->render('FabricanteBundle:DireccionFabricante:dnew.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DireccionFabricante entity.
     *
     * @param DireccionFabricante $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DireccionFabricante $entity)
    {
        $form = $this->createForm(new DireccionFabricanteType(), $entity, array(
            'action' => $this->generateUrl('direccionfabricante_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new DireccionFabricante entity.
     *
     */
    public function newAction()
    {
        $entity = new DireccionFabricante();
        $form   = $this->createCreateForm($entity);

        return $this->render('FabricanteBundle:DireccionFabricante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DireccionFabricante entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FabricanteBundle:DireccionFabricante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionFabricante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FabricanteBundle:DireccionFabricante:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DireccionFabricante entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FabricanteBundle:DireccionFabricante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionFabricante entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FabricanteBundle:DireccionFabricante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DireccionFabricante entity.
    *
    * @param DireccionFabricante $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DireccionFabricante $entity)
    {
        $form = $this->createForm(new DireccionFabricanteType(), $entity, array(
            'action' => $this->generateUrl('direccionfabricante_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }
    /**
     * Edits an existing DireccionFabricante entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FabricanteBundle:DireccionFabricante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionFabricante entity.');
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

            return $this->redirect($this->generateUrl('fabricante_show', array('id' => $entity->getId())));
        }

        return $this->render('FabricanteBundle:DireccionFabricante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DireccionFabricante entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FabricanteBundle:DireccionFabricante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DireccionFabricante entity.');
            }

            $em->remove($entity);
            $em->flush();
             $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('direccionfabricante'));
    }

    /**
     * Creates a form to delete a DireccionFabricante entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direccionfabricante_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
