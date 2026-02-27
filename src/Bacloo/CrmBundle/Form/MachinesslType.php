<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MachinesslType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('codegenerique')
            ->add('description')
            ->add('numSerie', 'text', array('required' => false))
            ->add('etat')
            ->add('prochaineVgp', 'date', array('widget' => 'single_text',
										'input' => 'string',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'attr' => array('class' => 'date'),
										))
            ->add('prochaineRevision', 'date', array('widget' => 'single_text',
										'input' => 'string',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'attr' => array('class' => 'date'),
										))
            ->add('entreprise')
            ->add('nomchantier')
            ->add('energie', 'choice', array(
					'choices'   => array(
						'electrique'   => 'Electrique',
						'diesel' => 'Diesel',
						'hybride' => 'Hybride',
						'manuelle'   => 'Manuelle',
					),
					'multiple'  => false,
				))
            ->add('longueur')
            ->add('largeur')
            ->add('hauteur')
            ->add('poids')
            ->add('chargemax')
            ->add('deport')
            ->add('loueur')
            ->add('codelocations', 'text', array('required' => false))
            ->add('clientid', 'text', array('required' => false))
            ->add('codecontrat', 'text', array('required' => false))
            ->add('original', 'text', array('required' => false))
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
            ->add('eventparc', 'collection', array(
										'type'         => new EventparcType(),
										  'allow_add'    => true,
										  'allow_delete' => true,
										  'required'     => false
										  ))
            ->add('eventsite', 'collection', array(
										'type'         => new EventsiteType(),
										  'allow_add'    => true,
										  'allow_delete' => true,
										  'required'     => false
										))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Machinessl'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_machinessl';
    }
}
