<?php

namespace Crm\VentasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VentaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaVenta','date',array('widget'=>'single_text'))
            ->add('usuarios')
            ->add('estatus','choice',array('choices' => array('demo' => 'Demo','venta' => 'Venta'),'attr' => array('class' => 'form-control')))
            ->add('equipo')
            ->add('producto')
            ->add('cliente')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\VentasBundle\Entity\Venta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_ventasbundle_venta';
    }
}
