<?php

namespace Crm\UsuariosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\UsuariosBundle\Entity\Usuarios;
use Crm\UsuariosBundle\Form\UsuariosType;

/**
 * Usuario controller.
 *
 */
class UsuariosController extends Controller
{

    /**
     * Lists all Usuarios entities.
     *
     */
    public function indexAction() 
    {
        return $this->render('UsuariosBundle:Usuarios:index.html.twig');
    }

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UsuariosBundle:Usuarios')->findAll();
        return $this->render('UsuariosBundle:Usuarios:listado.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Usuarios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Usuarios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Encode password
            $entity->setSalt(md5(time()));
            $plainPassword = $form->get('password')->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($entity, $plainPassword);
            $entity->setPassword($encoded);

            $em->persist($entity);
            $em->flush();

            $usuario = $this->nuevoUsuario($id = $entity->getPersonal());

            return $this->redirect($this->generateUrl('usuarios_show', array('id' => $entity->getId())));
        }

        return $this->render('UsuariosBundle:Usuarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Usuario entity.
     *
     * @param Usuarios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Usuarios $entity)
    {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('usuarios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Usuario entity.
     *
     */
    public function newAction()
    {
        $entity = new Usuarios();
        $form   = $this->createCreateForm($entity);
        return $this->render('UsuariosBundle:Usuarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function nuevoUsuario($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:Personal')->find($id);

            $entity ->setCheckUsuario('t');
            $em->persist($entity);
            $em->flush();
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuariosBundle:Usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UsuariosBundle:Usuarios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Usuarios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuariosBundle:Usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UsuariosBundle:Usuarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Usuario entity.
    *
    * @param Usuarios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Usuarios $entity)
    {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('usuarios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Usuarios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuariosBundle:Usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            // Encode password
            $plainPassword = $editForm->get('password')->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($entity, $plainPassword);
            $entity->setPassword($encoded);

            $em->flush();

            return $this->redirect($this->generateUrl('usuarios'));
        }

        return $this->render('UsuariosBundle:Usuarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Usuario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UsuariosBundle:Usuarios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }

            $em->remove($entity);
            $em->flush();
            $usuario = $this->usuarioLibre($id = $entity->getPersonal());
        }

        return $this->redirect($this->generateUrl('usuarios'));
    }

    /**
     * Creates a form to delete a Usuario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuarios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr' => array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }

    public function usuarioLibre($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersonalBundle:Personal')->find($id);

            $entity ->setCheckUsuario('f');
            $em->persist($entity);
            $em->flush();
    }
}
