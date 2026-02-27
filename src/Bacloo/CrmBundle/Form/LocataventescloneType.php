<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocataventescloneType extends AbstractType
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
//            ->add('codifvente', 'integer', array('required' => true))
            ->add('description', 'text', array('required' => true))
            ->add('quantite', 'integer', array('required' => false))
            ->add('pu', 'number', array('required' => false))
            ->add('montantvente', 'number', array('required' => false))
            ->add('user')
            ->add('codifvente', 'choice', array(
                'choices'   => array(
                    'entretien' => 'Entretien',
                    'transport' => 'Transport',
//						'annexes' => 'Produits des activités annexes',
                    'carburant'   => 'Carburant',
                    'vente'   => 'Vente',
                    'location'   => 'Location',
//                    'cession immobilisation'   => 'Cession d immobilisation',
                    'assurance'   => 'Assurance',
                ),
                'multiple'  => false,
            ))
            ->add('stockenr', 'integer', array('required' => false))
            ->add('stock', 'integer', array('required' => false))
			;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Locataventesclone'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_locataventesclone';
    }
}
