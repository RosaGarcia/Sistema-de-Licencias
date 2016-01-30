<?php

namespace Crm\EquipoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UbicacionType extends AbstractType
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
            ->add('equipo','entity', array(
                'class' => 'EquipoBundle:Equipo',
                'property' => 'serieWarriors',
                'query_builder' => function (\Crm\EquipoBundle\Entity\EquipoRepository $repository){
                    return $repository->createQueryBuilder('equipo')
                    ->orderBy('equipo.checkUbicacion', 'ASC')
                    ->where('equipo.checkUbicacion = :check')
                    ->setParameter('check', 'f');}
                ))
            ->add('estado')
            ->add('localidad','text',array('attr' => array('class' => 'form-control')))
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
            'data_class' => 'Crm\EquipoBundle\Entity\Ubicacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_equipobundle_ubicacion';
    }
}
