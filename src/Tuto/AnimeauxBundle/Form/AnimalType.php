<?php

namespace Tuto\AnimeauxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnimalType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('descreption','textarea',array(
                'required'=>false                   //ajout du 'required'=>false pour dire que c un champ non obligatoir
            ))
            ->add('url','url')//ajout du type de la variable dans le deusiemme parametre

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tuto\AnimeauxBundle\Entity\Animal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tuto_animeauxbundle_animal';
    }
}
