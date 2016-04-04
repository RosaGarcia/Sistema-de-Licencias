<?php

namespace Crm\EquipoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\EquipoBundle\Entity\CaracteristicasEquipo;
use Crm\EquipoBundle\Form\CaracteristicasEquipoType;
use Crm\EquipoBundle\Form\CaracteristicaEquipoType;

/**
 * CaracteristicasEquipo controller.
 *
 */
class CaracteristicasEquipoController extends Controller
{

    /**
     * Lists all CaracteristicasEquipo entities.
     *
     */
    public function indexAction()
    {
        return $this->render('EquipoBundle:CaracteristicasEquipo:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EquipoBundle:CaracteristicasEquipo')->findAll();

        return $this->render('EquipoBundle:CaracteristicasEquipo:listado.html.twig', array(
            'entities' => $entities,
        )); 
    }
    /**
     * Creates a new CaracteristicasEquipo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CaracteristicasEquipo();
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

            return $this->redirect($this->generateUrl('caracteristicasequipo_show', array('id' => $entity->getId())));
        }

        return $this->render('EquipoBundle:CaracteristicasEquipo:dnew.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CaracteristicasEquipo entity.
     *
     * @param CaracteristicasEquipo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CaracteristicasEquipo $entity)
    {
        $form = $this->createForm(new CaracteristicasEquipoType(), $entity, array(
            'action' => $this->generateUrl('caracteristicasequipo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CaracteristicasEquipo entity.
     *
     */
    public function newAction()
    {
        $entity = new CaracteristicasEquipo();
        $form   = $this->createCreateForm($entity);

        return $this->render('EquipoBundle:CaracteristicasEquipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function equipos($serial)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:Equipo')->find($serial);

            $entity ->setCheckCaracteristicas('t');
            $em->persist($entity);
            $em->flush();
    }

    /**
     * Finds and displays a CaracteristicasEquipo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:CaracteristicasEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CaracteristicasEquipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EquipoBundle:CaracteristicasEquipo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CaracteristicasEquipo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:CaracteristicasEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CaracteristicasEquipo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EquipoBundle:CaracteristicasEquipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CaracteristicasEquipo entity.
    *
    * @param CaracteristicasEquipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CaracteristicasEquipo $entity)
    {
        $form = $this->createForm(new CaracteristicaEquipoType(), $entity, array(
            'action' => $this->generateUrl('caracteristicasequipo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CaracteristicasEquipo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:CaracteristicasEquipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CaracteristicasEquipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('caracteristicasequipo_edit', array('id' => $id)));
        }

        return $this->render('EquipoBundle:CaracteristicasEquipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CaracteristicasEquipo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EquipoBundle:CaracteristicasEquipo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CaracteristicasEquipo entity.');
            }

            $em->remove($entity);
            $em->flush();

            $equipo = $this->equiposLibre($serial = $entity->getEquipo());
        }

        return $this->redirect($this->generateUrl('caracteristicasequipo'));
    }

    /**
     * Creates a form to delete a CaracteristicasEquipo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('caracteristicasequipo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }

    public function equiposLibre($serial)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:Equipo')->find($serial);

            $entity ->setCheckCaracteristicas('f');
            $em->persist($entity);
            $em->flush();
    }
}
