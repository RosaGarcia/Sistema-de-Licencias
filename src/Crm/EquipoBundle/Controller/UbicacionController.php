<?php

namespace Crm\EquipoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\EquipoBundle\Entity\Ubicacion;
use Crm\EquipoBundle\Form\UbicacionType;
use Crm\EquipoBundle\Form\UbicacionEquipoType;

/**
 * Ubicacion controller.
 *
 */
class UbicacionController extends Controller
{

    /**
     * Lists all Ubicacion entities.
     *
     */
    public function indexAction()
    {
       return $this->render('EquipoBundle:Ubicacion:index.html.twig');
    }

    public function listadoAction()
    {
         $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EquipoBundle:Ubicacion')->findAll();

        return $this->render('EquipoBundle:Ubicacion:listado.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Ubicacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ubicacion();
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

            return $this->redirect($this->generateUrl('ubicacion_show', array('id' => $entity->getId())));
        }

        return $this->render('EquipoBundle:Ubicacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ubicacion entity.
     *
     * @param Ubicacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ubicacion $entity)
    {
        $form = $this->createForm(new UbicacionType(), $entity, array(
            'action' => $this->generateUrl('ubicacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Ubicacion entity.
     *
     */
    public function newAction()
    {
        $entity = new Ubicacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('EquipoBundle:Ubicacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function equipos($serial)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:Equipo')->find($serial);

            $entity ->setCheckUbicacion('t');
            $em->persist($entity);
            $em->flush();
    }

    /**
     * Finds and displays a Ubicacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:Ubicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ubicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EquipoBundle:Ubicacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ubicacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:Ubicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ubicacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EquipoBundle:Ubicacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ubicacion entity.
    *
    * @param Ubicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ubicacion $entity)
    {
        $form = $this->createForm(new UbicacionEquipoType(), $entity, array(
            'action' => $this->generateUrl('ubicacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar','attr' => array('class' => 'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Ubicacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:Ubicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ubicacion entity.');
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

            return $this->redirect($this->generateUrl('ubicacion_edit', array('id' => $id)));
        }

        return $this->render('EquipoBundle:Ubicacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Ubicacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EquipoBundle:Ubicacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ubicacion entity.');
            }

            $em->remove($entity);
            $em->flush();
            $equipo = $this->equiposLibre($serial = $entity->getEquipo());
            $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Se ha eliminado el registro exitosamente'
                            );
        }

        return $this->redirect($this->generateUrl('ubicacion'));
    }

    /**
     * Creates a form to delete a Ubicacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ubicacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }

    public function equiposLibre($serial)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EquipoBundle:Equipo')->find($serial);

            $entity ->setCheckUbicacion('f');
            $em->persist($entity);
            $em->flush();
    }
}
