<?php

namespace Crm\EmpresaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\EmpresaBundle\Entity\DireccionEmpresa;
use Crm\EmpresaBundle\Form\DireccionEmpresaType;

/**
 * DireccionEmpresa controller.
 *
 */
class DireccionEmpresaController extends Controller
{

    /**
     * Lists all DireccionEmpresa entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EmpresaBundle:DireccionEmpresa')->findAll();

        return $this->render('EmpresaBundle:DireccionEmpresa:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DireccionEmpresa entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DireccionEmpresa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha creado el registro exitosamente'
                            );

            return $this->redirect($this->generateUrl('empresa_show', array('id' => $entity->getId())));
        }

        return $this->render('EmpresaBundle:DireccionEmpresa:dnew.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DireccionEmpresa entity.
     *
     * @param DireccionEmpresa $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DireccionEmpresa $entity)
    {
        $form = $this->createForm(new DireccionEmpresaType(), $entity, array(
            'action' => $this->generateUrl('direccionempresa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' =>'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DireccionEmpresa entity.
     *
     */
    public function newAction()
    {
        $entity = new DireccionEmpresa();
        $form   = $this->createCreateForm($entity);

        return $this->render('EmpresaBundle:DireccionEmpresa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DireccionEmpresa entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpresaBundle:DireccionEmpresa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionEmpresa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpresaBundle:DireccionEmpresa:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DireccionEmpresa entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpresaBundle:DireccionEmpresa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionEmpresa entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EmpresaBundle:DireccionEmpresa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DireccionEmpresa entity.
    *
    * @param DireccionEmpresa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DireccionEmpresa $entity)
    {
        $form = $this->createForm(new DireccionEmpresaType(), $entity, array(
            'action' => $this->generateUrl('direccionempresa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }
    /**
     * Edits an existing DireccionEmpresa entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EmpresaBundle:DireccionEmpresa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DireccionEmpresa entity.');
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

           return $this->redirect($this->generateUrl('empresa_show', array('id' => $entity->getId())));
        }

        return $this->render('EmpresaBundle:DireccionEmpresa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DireccionEmpresa entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EmpresaBundle:DireccionEmpresa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DireccionEmpresa entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('direccionempresa'));
    }

    /**
     * Creates a form to delete a DireccionEmpresa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direccionempresa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
