<?php

namespace Crm\CaracteristicasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProcesadorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marca','text',array('attr' => array('class' => 'form-control')))
            ->add('modelo','text',array('attr' => array('class' => 'form-control')))
            ->add('velocidad','text',array('attr' => array('class' => 'form-control')))
            ->add('unidad','choice',array('choices' => array('GigaHertz' => 'GHz'),'attr' => array('class' => 'form-control')))
            ->add('terminoProcesador','text',array('attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\CaracteristicasBundle\Entity\Procesador'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_caracteristicasbundle_procesador';
    }
}
