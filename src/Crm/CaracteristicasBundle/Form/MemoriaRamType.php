<?php

namespace Crm\CaracteristicasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MemoriaRamType extends AbstractType
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
            ->add('capacidad','integer',array('attr' => array('class' => 'form-control','min'=>'1','max'=>'32')))
            ->add('unidad','choice',array('choices' => array('GigaByte' => 'GB'),'attr' => array('class' => 'form-control')))
            ->add('tipo','text',array('attr' => array('class' => 'form-control')))
            ->add('terminoMemoria','text',array('attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\CaracteristicasBundle\Entity\MemoriaRam'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_caracteristicasbundle_memoriaram';
    }
}
