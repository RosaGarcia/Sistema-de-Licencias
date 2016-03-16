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
            ->add('noDisponible',null,array("required" => false))
            ->add('estatus','choice',array('choices' => array('Demo' => 'Demo','Venta' => 'Venta'),'attr' => array('class' => 'form-control')))
            ->add('termino')
            ->add('cliente')
            ->add('equipo','entity', array(
                'class' => 'EquipoBundle:Equipo',
                'property' => 'serieWarriors',
                'query_builder' => function (\Crm\EquipoBundle\Entity\EquipoRepository $repository){
                    return $repository->createQueryBuilder('equipo')
                    ->orderBy('equipo.checkVenta', 'ASC')
                    ->where('equipo.checkVenta = :check')
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
