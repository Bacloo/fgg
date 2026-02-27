<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocationsfrsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeclient', 'integer', array('required' => false))
            ->add('fournisseurid', 'integer', array('required' => false))
            ->add('fournisseur', 'text', array('required' => false))
            ->add('refprod', 'text', array('required' => false))
            ->add('reference', 'choice', array(
					'choices'   => array(
                        'Assurances Matériels'   => 'Assurances Matériels',
                        'Assurance RCP'   => 'Assurance RCP',
                        'Consommables matériels' => 'Consommables matériels',
                        'Carburant' => 'Carburant',
                        'Carburant d entretien' => 'Carburant d entretien',
                        'Location de matériel'   => 'Crédit matériel',
//                        'Crédit bail mobilier (structure/frais généraux)' => 'Crédit bail mobilier (structure/frais généraux)',
                        'Documentation generale'   => 'Documentation generale',
                        'Dons et pourboirs'   => 'Dons et pourboirs',
                        'Electricité - eau' => 'Electricité - eau',
                        'Entretien matériels'   => 'Entretien matériels',
//                        'Entretien mat transport'   => 'Entretien mat transport',
                        'Frais bancaires'   => 'Frais bancaires',
                        'Frais d actes (formalités)'   => 'Frais d actes (formalités)',
                        'Frais deplacements'   => 'Frais deplacements/restauration',
                        'Frais postaux'   => 'Frais postaux',
                        'Fourn administratives' => 'Fourn administratives',
                        'Honoraires comptable'   => 'Honoraires comptable',
                        'Honoraires juridique'   => 'Honoraires juridique',
                        'Location géolocalisation'   => 'Location géolocalisation',
                        'Maintenance informatique'   => 'Maintenance informatique',
                        'Petites fournitures et outillage' => 'Petites fournitures et outillage',
                        'Publicite-communication'   => 'Publicite-communication',
                        'Telephone'   => 'Telephone',
					),
					'multiple'  => false,
				))
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
            ->add('mensuel', 'checkbox', array('required' => false))
            ->add('designation', 'text', array('required' => false))
            ->add('pu', 'number', array('required' => true))
            ->add('quantite', 'number', array('required' => true))
            ->add('montantht', 'number', array('required' => false))
            ->add('montantttc', 'number', array('required' => false))
            ->add('codelocationsl', 'text', array('required' => false))
            ->add('facturersamedi', 'checkbox',  array('required' => false))
            ->add('facturerdimanche', 'checkbox',  array('required' => false))
            ->add('facturationferies', 'checkbox',  array('required' => false))
            ->add('contributionverte', 'integer', array('required' => false))
            ->add('assurance', 'integer', array('required' => false))
            ->add('aechoir', 'checkbox', array('required' => false))
            ->add('code', 'text', array('required' => false))
            ->add('machineid', 'integer', array('required' => false))
			;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Locationsfrs'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_locationsfrs';
    }
}
