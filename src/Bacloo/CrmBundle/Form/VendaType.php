<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VendaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('clientid', 'integer', array('required' => false))
            ->add('client', 'text', array('required' => false))
            ->add('user', 'text', array('required' => false))
            ->add('adresse1', 'text', array('required' => false))
            ->add('adresse2', 'text', array('required' => false))
            ->add('adresse3', 'text', array('required' => false))
            ->add('cp', 'integer', array('required' => false))
            ->add('ville', 'text', array('required' => false))
            ->add('offreencours', 'checkbox', array('data' => true))
            ->add('bdcrecu', 'checkbox', array('required' => false))
            ->add('numbdc', 'text', array('required' => false))
            ->add('offrerefusee', 'checkbox', array('required' => false))
            ->add('montantvente', 'number', array('required' => false))
            ->add('acheteur', 'text', array('required' => false))
            ->add('acompte', 'integer', array('required' => false))
            ->add('commentaire','textarea', array('required' => false))
            ->add('ventes', 'collection', array(
			'type'         => new VentesType(),
			  'allow_add'    => true,
			  'allow_delete' => true,
			  'required'     => true	
		  ))
            ->add('remise', 'text', array('required' => false))
            ->add('sanstva', 'checkbox', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Venda'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_venda';
    }
}
