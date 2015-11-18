<?php

namespace Crm\PersonalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('attr' => array('class' => 'form-control')))
            ->add('apePat','text',array('attr' => array('class' => 'form-control')))
            ->add('apeMat','text',array('attr' => array('class' => 'form-control')))
            ->add('telefono','text',array('attr' => array('class' => 'form-control'),'required' => false))
            ->add('celular','text',array('attr' => array('class' => 'form-control'),'required' => false))
            ->add('email','email',array('attr' => array('class' => 'form-control')))
            ->add('estatus')
            ->add('empresa')
            ->add('puesto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\PersonalBundle\Entity\Personal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_personalbundle_personal';
    }
}
