<?php

namespace Crm\TicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cola','choice',array('choices' => array('Warriors'=>'Warriors','Hosting'=>'Hosting')))
            ->add('solicitante')
            ->add('contenido')
            ->add('propietario')
            ->add('prioridad','integer',array('attr' => array('class' => 'form-control','min'=>'1','max'=>'10')))
            ->add('fechaCreacion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\TicketBundle\Entity\Ticket'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_ticketbundle_ticket';
    }
}
