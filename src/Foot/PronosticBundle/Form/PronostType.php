<?php

namespace Foot\PronosticBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PronostType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idmatch')
            ->add('iduser')
            ->add('butteam1')
            ->add('butteam2')
            ->add('point')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Foot\PronosticBundle\Entity\Pronost'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'foot_pronosticbundle_pronost';
    }
}
