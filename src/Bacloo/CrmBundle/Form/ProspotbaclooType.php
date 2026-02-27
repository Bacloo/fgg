<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProspotbaclooType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ficheid')
            ->add('raisonSociale')
            ->add('activite')
            ->add('besoins')
            ->add('descbesoins')
            ->add('cp')
            ->add('ville')
            ->add('user')
            ->add('vendeur')
            ->add('vemail')
            ->add('aVendre', 'checkbox', array('required' => false))
            ->add('prixsscont')
            ->add('aVendrec')
            ->add('acheter')
            ->add('prixavcont')
            ->add('prospectsbacloo')
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
            'data_class' => 'Bacloo\CrmBundle\Entity\Prospotbacloo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_prospotbacloo';
    }
}
