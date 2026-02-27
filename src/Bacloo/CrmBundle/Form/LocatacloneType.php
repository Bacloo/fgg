<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocatacloneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chantierid', 'integer', array('required' => false))
            ->add('nomchantier', 'text', array('required' => true))
            ->add('adresse1', 'text', array('required' => true))
            ->add('adresse2', 'text', array('required' => false))
            ->add('adresse3', 'text', array('required' => false))
            ->add('cp', 'text', array('required' => false))
            ->add('ville', 'text', array('required' => false))
            ->add('clientid', 'text', array('required' => false))
            ->add('client', 'text', array('required' => false))
            ->add('user', 'text', array('required' => false))
            ->add('transportaller', 'integer', array('required' => false))
            ->add('transportretour', 'integer', array('required' => false))
            ->add('remise', 'number', array('required' => false))
            ->add('acheteur', 'text', array('required' => false))
            ->add('contactchantier', 'text', array('required' => false))
            ->add('datemodif', 'text', array('required' => false))
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
            ->add('facturersamedi', 'checkbox',  array('required' => false))
            ->add('facturerdimanche', 'checkbox',  array('required' => false))
            ->add('facturationferies', 'checkbox',  array('required' => false))
            ->add('contributionverte', 'integer', array('required' => false))
            ->add('assurance', 'integer', array('required' => false))
            ->add('offreencours', 'checkbox', array('data' => true))
            ->add('bdcrecu', 'checkbox', array('required' => false))
            ->add('numbdc', 'text', array('required' => false))
            ->add('offrerefusee', 'checkbox', array('required' => false))
            ->add('annulee', 'checkbox', array('required' => false))
            ->add('contrat', 'checkbox', array('required' => false))
            ->add('montantloc', 'integer', array('required' => false))
            ->add('locationsclone', 'collection', array(
			'type'         => new LocationscloneType(),
			  'allow_add'    => true,
			  'allow_delete' => true,
			  'required'     => true	
		  ))
            ->add('locationsslclone', 'collection', array(
			'type'         => new LocationsslcloneType(),
			  'allow_add'    => true,
			  'allow_delete' => true,
			  'required'     => true	
		  ))
            ->add('locataventesclone', 'collection', array(
			'type'         => new LocataventescloneType(),
			  'allow_add'    => true,
			  'allow_delete' => true,
			  'required'     => true	
		  ))
            ->add('caution', 'integer', array('required' => false))
            ->add('commentaire','textarea', array('required' => false))
            ->add('commentairecache','textarea', array('required' => false))
            ->add('spacer','integer', array('required' => false))
            ->add('alerte', 'choice', array(
					'choices'   => array(
						'non'   => 'Non',
						'oui' => 'Oui',
					),
					'multiple'  => false,
				))
            ->add('acompte','number', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Locataclone'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_locataclone';
    }
}
