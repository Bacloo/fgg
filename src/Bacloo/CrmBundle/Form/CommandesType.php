<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date', array('widget' => 'single_text',
										'input' => 'datetime',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'read_only' => true,
										'attr' => array('class' => 'date'),
										))
            ->add('user', 'text', array('required' => false, 'read_only' => true))
            ->add('designation')
            ->add('entreprise')
            ->add('reference')
            ->add('prix')
            ->add('origine', 'choice', array(
					'choices' => array('appel_entrant' => 'Appel Entrant',
									   'prospection' => 'Prospection',
									   'internet' => 'Internet',
									   'reseau' => 'Réseau',
									   'bacloo' => 'Bacloo',
									   'autres' => 'Autres'),
					'preferred_choices' => array('prospection')))
            ->add('statut', 'choice', array(
					'choices' => array('en_cours' => 'En cours',
									   'signe' => 'Signé',
									   'refus' => 'Refus',
									   'reporte' => 'Reporté'),
					'preferred_choices' => array('en_cours')))
            ->add('commentaire')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Commandes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_commandes';
    }
}
