<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReglementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numfacture', 'text', array('required' => false))
            ->add('typedoc', 'text', array('required' => false))
            ->add('totalttc', 'number', array('required' => false))
            ->add('montanttroppercu', 'number', array('required' => false))
            ->add('montantavoir', 'number', array('required' => false))
            ->add('escompte', 'number', array('required' => false))
            ->add('aimputer', 'number', array('required' => false))
            ->add('restedu', 'number', array('required' => false))
            ->add('selection', 'checkbox', array('required' => false))
            ->add('troppercu', 'checkbox', array('required' => false))
            ->add('regler', 'checkbox', array('required' => false))
            ->add('echeance', 'text', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Reglement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_reglement';
    }
}
