<?php

namespace Crm\EquipoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LicenciaEquipoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaInicio','date',array('widget'=>'single_text'))
            ->add('fechaFinal','date',array('widget'=>'single_text'))
            ->add('equipo','entity', array(
                'class' => 'EquipoBundle:Equipo',
                'property' => 'serieWarriors',
                'query_builder' => function (\Crm\EquipoBundle\Entity\EquipoRepository $repository){
                    return $repository->createQueryBuilder('equipo')
                    ->orderBy('equipo.checkLicencia', 'ASC')
                    ->where('equipo.checkLicencia = :check')
                    ->setParameter('check', 'f');}
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\EquipoBundle\Entity\LicenciaEquipo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_equipobundle_licenciaequipo';
    }
}
