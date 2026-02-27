<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RapsearchType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('du', 'date', array('widget' => 'single_text',
										'input' => 'datetime',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'attr' => array('class' => 'date'),
										))
            ->add('au', 'date', array('widget' => 'single_text',
										'input' => 'datetime',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'attr' => array('class' => 'date'),
										))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Rapsearch'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_rapsearch';
    }
}
