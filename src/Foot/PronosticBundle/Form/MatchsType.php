<?php

namespace Foot\PronosticBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatchsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idteam1')
            ->add('idteam2')
            ->add('date')
            ->add('butteam1')
            ->add('butteam2')
            ->add('valeur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Foot\PronosticBundle\Entity\Matchs'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'foot_pronosticbundle_matchs';
    }
}
