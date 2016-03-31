<?php

namespace Crm\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userName','text',array('attr' => array('class' => 'form-control')))
            ->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'Los paswords no coinciden.',
                    'options' => array('attr' => array('class' => 'input-xlarge','minlength'=>8)),
                    'required' => false,
                    'first_options'  => array('label' => 'Password'),
                    'second_options' => array('label' => 'Repite password')))
            ->add('personal','entity', array(
                    'class' => 'PersonalBundle:Personal',
                    'property' => 'nombre',
                    'query_builder' => function (\Crm\PersonalBundle\Entity\PersonalRepository $repository){
                        return $repository->createQueryBuilder('personal')
                        ->orderBy('personal.checkUsuario', 'ASC')
                        ->where('personal.checkUsuario = :check')
                        ->setParameter('check', 'f');}
                    ))
            ->add('rol')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\UsuariosBundle\Entity\Usuarios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_usuariosbundle_usuarios';
    }
}
