<?php

namespace Crm\EquipoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProcedenciaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaLlegada','date')
            ->add('numeroSerieFabricante','text',array('attr' => array('class' => 'form-control')))
            ->add('numeroSerieWarriors','text',array('attr' => array('class' => 'form-control')))
            ->add('fechaSalida','date')
            ->add('fabricante')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\EquipoBundle\Entity\Procedencia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_equipobundle_procedencia';
    }
}
