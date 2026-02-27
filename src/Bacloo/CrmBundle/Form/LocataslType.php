<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocataslType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chantierid', 'integer', array('required' => false))
            ->add('nomchantier', 'text')
            ->add('adresse1', 'text', array('required' => false))
            ->add('adresse2', 'text', array('required' => false))
            ->add('adresse3', 'text', array('required' => false))
            ->add('cp', 'text', array('required' => false))
            ->add('ville', 'text', array('required' => false))
            ->add('clientid', 'text', array('required' => false))
            ->add('client', 'text', array('required' => false))
            ->add('user', 'text', array('required' => false))
            ->add('transportaller', 'text')
            ->add('transportretour', 'text')
            ->add('remise', 'text', array('required' => false))
            ->add('acheteur', 'text')
            ->add('contactchantier', 'text', array('required' => false))
            ->add('datemodif')
            ->add('montantloc')
            ->add('debutloc', 'date', array('widget' => 'single_text',
										'input' => 'string',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'read_only' => false,
										'attr' => array('class' => 'debutloc'),
										))
            ->add('finloc', 'date', array('widget' => 'single_text',
										'input' => 'string',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'read_only' => false,
										'attr' => array('class' => 'finloc'),
										))
            ->add('facturerwe', 'checkbox',  array('required' => false))
            ->add('contributionverte', 'checkbox', array('required' => false))
            ->add('assurance', 'checkbox', array('required' => false))
            ->add('offreencours', 'checkbox', array('data' => true))
            ->add('bdcrecu', 'checkbox', array('data' => false,'required' => false))
            ->add('numbdc', 'text', array('required' => false))
            ->add('offrerefusee', 'checkbox', array('data' => false,'required' => false))
            ->add('annulee', 'checkbox', array('data' => false,'required' => false))
            ->add('contrat', 'checkbox', array('data' => false,'required' => false))
            ->add('locationssl', 'collection', array(
			'type'         => new LocationsslType(),
			  'allow_add'    => true,
			  'allow_delete' => true,
			  'required'     => true	
		  ))
        ;

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Locatasl'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_locatasl';
    }
}
