<?php

namespace Crm\EquipoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\EquipoBundle\Entity\LicenciaEquipo;
use Crm\EquipoBundle\Form\LicenciaEquipoType;

/**
 * LicenciaEquipo controller.
 *
 */
class LicenciaEquipoController extends Controller
{

    /**
     * Lists all LicenciaEquipo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EquipoBundle:LicenciaEquipo')->findAll();

        return $this->render('EquipoBundle:LicenciaEquipo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new LicenciaEquipo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new LicenciaEquipo();
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
            $equipo = $this->equipos($serial = $entity->getEquipo());

            return $this->redirect($this->generateUrl('licenciaequipo_show', array('id' => $entity->getId())));
        }

        return $this->render('EquipoBundle:LicenciaEquipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a LicenciaEquipo entity.
     *
     * @param LicenciaEquipo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(LicenciaEquipo $entity)
    {
        $form = $this->createForm(new LicenciaEquipoType(), $entity, array(
            'action' => $this->generateUrl('licenciaequipo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')
));

        return $form;
    }

    /**
     * Displays a form to create a new LicenciaEquipo entity.
     *
     */
    public function newAction()
    {
        $entity = new LicenciaEquipo();
        $form   = $this->createCreateForm($entity);

        return $this->render('EquipoBundle:LicenciaEquipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function equipos($serial)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:Equipo')->find($serial);

            $entity ->setCheckLicencia('t');
            $em->persist($entity);
            $em->flush();
    }

    /**
     * Finds and displays a LicenciaEquipo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:LicenciaEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LicenciaEquipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EquipoBundle:LicenciaEquipo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing LicenciaEquipo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:LicenciaEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LicenciaEquipo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EquipoBundle:LicenciaEquipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a LicenciaEquipo entity.
    *
    * @param LicenciaEquipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LicenciaEquipo $entity)
    {
        $form = $this->createForm(new LicenciaEquipoType(), $entity, array(
            'action' => $this->generateUrl('licenciaequipo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing LicenciaEquipo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:LicenciaEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LicenciaEquipo entity.');
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

            return $this->redirect($this->generateUrl('licenciaequipo'));
        }

        return $this->render('EquipoBundle:LicenciaEquipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a LicenciaEquipo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EquipoBundle:LicenciaEquipo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LicenciaEquipo entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('licenciaequipo'));
    }

    /**
     * Creates a form to delete a LicenciaEquipo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('licenciaequipo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
