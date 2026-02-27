<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReglaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientid', 'integer', array('required' => false))
            ->add('datepaiment', 'date', array('widget' => 'single_text',
                'input' => 'string',
                'format' => 'dd/MM/yyyy',
                'required' => false,
                'read_only' => false,
                'attr' => array('class' => 'finloc'),
            ))
            ->add('modepaiement', 'choice', array(
                'choices'   => array(
                    'vide'   => '',
                    'virement'   => 'Virement',
                    'cheque' => 'Chèque',
                    'cb' => 'CB',
                    'Cemeca' => 'Cemeca',
                    'cpt' => 'CPT',
                    'lcr' => 'L.C.R',
                    'Liquidation' => 'Liquidation',
                    'prélèvement' => 'Prélèvement',
                ),
                'multiple'  => false,
            ))
            ->add('troppercu', 'number', array('required' => false,'disabled' => true))
            ->add('montantimpute', 'number', array('required' => false,'disabled' => true))
            ->add('montantreg', 'number', array('required' => false))
            ->add('solde', 'number', array('required' => false,'disabled' => true))
            ->add('client', 'text', array('required' => false))
            ->add('reglement', 'collection', array(
                'type'         => new ReglementType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'required'     => true
            ))
            ->add('usetroppercu', 'checkbox', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Regla'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_regla';
    }
}
