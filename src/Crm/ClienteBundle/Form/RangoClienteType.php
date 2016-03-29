<?php

namespace Crm\ClienteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RangoClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rango','text',array('attr' => array('class' => 'form-control')))
            ->add('dias','integer',array('attr' => array('class' => 'form-control','min'=>'0','max'=>'30')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\ClienteBundle\Entity\RangoCliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_clientebundle_rangocliente';
    }
}
