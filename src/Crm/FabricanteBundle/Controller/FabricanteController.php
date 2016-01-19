<?php

namespace Crm\FabricanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\FabricanteBundle\Entity\Fabricante;
use Crm\FabricanteBundle\Form\FabricanteType;

/**
 * Fabricante controller.
 *
 */
class FabricanteController extends Controller
{

    /**
     * Lists all Fabricante entities.
     *
     */
    public function indexAction()
    {
        
        return $this->render('FabricanteBundle:Fabricante:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FabricanteBundle:Fabricante')->findAll();

        return $this->render('FabricanteBundle:Fabricante:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fabricante entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Fabricante();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fabricante_show', array('id' => $entity->getId())));
        }

        return $this->render('FabricanteBundle:Fabricante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Fabricante entity.
     *
     * @param Fabricante $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fabricante $entity)
    {
        $form = $this->createForm(new FabricanteType(), $entity, array(
            'action' => $this->generateUrl('fabricante_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Fabricante entity.
     *
     */
    public function newAction()
    {
        $entity = new Fabricante();
        $form   = $this->createCreateForm($entity);

        return $this->render('FabricanteBundle:Fabricante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fabricante entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FabricanteBundle:Fabricante')->fabricante($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fabricante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FabricanteBundle:Fabricante:show.html.twig', array(
            'entities'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fabricante entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FabricanteBundle:Fabricante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fabricante entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FabricanteBundle:Fabricante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Fabricante entity.
    *
    * @param Fabricante $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fabricante $entity)
    {
        $form = $this->createForm(new FabricanteType(), $entity, array(
            'action' => $this->generateUrl('fabricante_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Fabricante entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FabricanteBundle:Fabricante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fabricante entity.');
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

            return $this->redirect($this->generateUrl('fabricante'));
        }

        return $this->render('FabricanteBundle:Fabricante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fabricante entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FabricanteBundle:Fabricante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fabricante entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('fabricante'));
    }

    /**
     * Creates a form to delete a Fabricante entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fabricante_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
