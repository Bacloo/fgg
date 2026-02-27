<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChantierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse1', 'text', array('required' => false))
            ->add('adresse2', 'text', array('required' => false))
            ->add('adresse3', 'text', array('required' => false))
            ->add('cp', 'text', array('required' => false))
            ->add('ville', 'text', array('required' => false))
            ->add('description', 'text', array('required' => false))
            ->add('dateDebut', 'text', array('required' => false))
            ->add('dateFin', 'text', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Chantier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_chantier';
    }
}
