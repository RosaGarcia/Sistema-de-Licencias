<?php

namespace Crm\EquipoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CaracteristicaEquipoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('interfaz','text',array('attr' => array('class' => 'form-control')))
            ->add('usb','integer',array('attr' => array('class' => 'form-control')))
            ->add('expansion',null,array("required" => false))
            ->add('capacidad','text',array('attr' => array('class' => 'form-control'),'required'=> false))
            ->add('procesador')
            ->add('dimensiones')
            ->add('discoDuro')
            ->add('memoriaRam')
            ->add('software')
            ->add('equipo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\EquipoBundle\Entity\CaracteristicasEquipo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_equipobundle_caracteristicasequipo';
    }
}
