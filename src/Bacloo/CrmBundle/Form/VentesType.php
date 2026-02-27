<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VentesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('refarticle', 'text', array('required' => true))
            ->add('codifvente', 'integer', array('required' => true))
            ->add('description', 'textarea', array('required' => true))
            ->add('quantite', 'number', array('required' => false))
            ->add('pu', 'number', array('required' => false))
            ->add('montantvente', 'number', array('required' => false))
            ->add('user')
            ->add('codifvente', 'choice', array(
					'choices'   => array(
						'vente'   => 'Vente',
						'entretien' => 'Entretien',
						'location' => 'Location',
						'transport' => 'Transport',
						'annexes' => 'Autres ventes',
						'remise'   => 'Remise',
						'assurance'   => 'Assurance',
					),
					'multiple'  => false,
				))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Ventes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_ventes';
    }
}
