<?php

namespace Crm\EmpresaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razonSocial','text',array('attr' => array('class' => 'form-control')))
            ->add('rfc','text',array('attr' => array('class' => 'form-control')))
            ->add('telefono1','text',array('attr' => array('class' => 'form-control','minlength'=>'10','maxlength'=>'10')))
            ->add('ext1','integer',array('attr' => array('class' => 'form-control','min'=>'0','max'=>'99999'),'required' => false))
            ->add('telefono2','text',array('attr' => array('class' => 'form-control','minlength'=>'10','maxlength'=>'10'),'required' => false))
            ->add('ext2','integer',array('attr' => array('class' => 'form-control','min'=>'0','max'=>'99999'),'required' => false))
            ->add('email','email',array('attr' => array('class' => 'form-control')))
            ->add('paginaWeb','text',array('attr' => array('class' => 'form-control'),'required' => false))
            ->add('estatus')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\EmpresaBundle\Entity\Empresa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_empresabundle_empresa';
    }
}
