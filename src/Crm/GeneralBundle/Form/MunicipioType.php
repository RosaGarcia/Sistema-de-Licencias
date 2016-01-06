<?php

namespace Crm\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MunicipioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD:src/Crm/GeneralBundle/Form/MunicipioType.php
            ->add('nombreMunicipio')
=======
            ->add('municipio','text',array('attr' => array('class' => 'form-control')))
            ->add('estado')
>>>>>>> proyecto:src/Crm/GeneralBundle/Form/MunicipioType.php
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\GeneralBundle\Entity\Municipio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_generalbundle_municipio';
    }
}
