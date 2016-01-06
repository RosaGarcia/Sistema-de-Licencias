<?php

namespace Crm\EmpresaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DireccionEmpresaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('calle','text',array('attr' => array('class' => 'form-control')))
            ->add('numeroExt','text',array('attr' => array('class' => 'form-control')))
            ->add('numeroInt','text',array('attr' => array('class' => 'form-control')))
            ->add('colonia','text',array('attr' => array('class' => 'form-control')))
            ->add('codigoPostal','text',array('attr' => array('class' => 'form-control')))
            ->add('empresa', new EmpresaType())
            ->add('pais')
            ->add('estado')
            ->add('localidad','text',array('attr' => array('class' => 'form-control')))
            ->add('municipio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\EmpresaBundle\Entity\DireccionEmpresa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_empresabundle_direccionempresa';
    }
}
