<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProspotType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('RaisonSociale', 'text', array('required' => false, 'read_only' => true))
            ->add('activite', 'textarea', array('required' => false, 'read_only' => true))
            ->add('besoins', 'text', array('required' => false, 'read_only' => true))
            ->add('cp', 'text', array('required' => false, 'read_only' => true))
            ->add('ville', 'text', array('required' => false, 'read_only' => true))
            ->add('user', 'text', array('required' => false, 'read_only' => true))
            ->add('avendre', 'checkbox', array('required' => false, 'read_only' => true))
            ->add('avendrec', 'checkbox', array('required' => false, 'read_only' => true))
            ->add('ficheid', 'text', array('required' => false, 'read_only' => true))
            ->add('Prixsscont', 'text', array('required' => false, 'read_only' => true))
            ->add('Prixavcont', 'text', array('required' => false, 'read_only' => true))
            ->add('vendeur', 'text', array('required' => false, 'read_only' => true))
            ->add('descbesoins', 'textarea', array('required' => false, 'read_only' => true))
            ->add('voir')
            ->add('masquer')
            ->add('lastmodif', 'date', array('widget' => 'single_text',
										'input' => 'datetime',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'read_only' => true,
										'attr' => array('class' => 'lastmodif')
										))				
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Prospot'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_prospot';
    }
}
