<?php

namespace Crm\EquipoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('serieFabricante','text',array('attr' => array('class' => 'form-control')))
            ->add('serieWarriors','text',array('attr' => array('class' => 'form-control')))
            ->add('fechaLlegada','date',array('widget'=>'single_text'))
            ->add('modeloEquipo')
            ->add('fabricante')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\EquipoBundle\Entity\Equipo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_equipobundle_equipo';
    }
}
