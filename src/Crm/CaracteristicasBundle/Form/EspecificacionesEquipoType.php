<?php

namespace Crm\CaracteristicasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EspecificacionesEquipoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroInterfaces','integer',array('attr' => array('class' => 'form-control')))
            ->add('numeroUsb','integer',array('attr' => array('class' => 'form-control')))
            ->add('expansion',null,array("required" => false))
            ->add('procesador')
            ->add('capacidad')
            ->add('terminoMemoria')
            ->add('terminoDisco')
            ->add('versionSoftware')
            ->add('dimenciones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\CaracteristicasBundle\Entity\EspecificacionesEquipo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_caracteristicasbundle_especificacionesequipo';
    }
}
