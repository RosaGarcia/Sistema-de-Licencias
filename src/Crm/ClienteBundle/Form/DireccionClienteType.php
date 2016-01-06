<?php

namespace Crm\ClienteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DireccionClienteType extends AbstractType
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
            ->add('numeroInt','text',array('attr' => array('class' => 'form-control'),'required' => false))
            ->add('colonia','text',array('attr' => array('class' => 'form-control')))
            ->add('codigoPostal','text',array('attr' => array('class' => 'form-control')))
<<<<<<< HEAD
            ->add('cliente',new ClienteType())
            ->add('localidad','text',array('attr' => array('class' => 'form-control')))
=======
            ->add('cliente', new ClienteType())
            ->add('localidad')
            ->add('municipio')
>>>>>>> proyecto
            ->add('estado')
            ->add('pais')
            ->add('municipio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\ClienteBundle\Entity\DireccionCliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_clientebundle_direccioncliente';
    }
}
