<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TransactionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('raisonsociale')
            ->add('vendeur')
            ->add('acheteur')
            ->add('date')
            ->add('typetransac')
            ->add('prix')
            ->add('ficheid')
            ->add('nficheid')
            ->add('note', 'choice', array(
					'choices' => array('0' => '0',
									   '1' => '1',
									   '2' => '2',
									   '3' => '3',
									   '4' => '4',
									   '5' => '5')))
            ->add('commentaire')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Transaction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_transaction';
    }
}
