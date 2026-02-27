<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BonretourType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('niveaucarb', 'integer', array('required' => false))
            ->add('docadmin', 'checkbox', array('required' => false))
            ->add('cle', 'checkbox', array('required' => false))
            ->add('commentaire','textarea', array('required' => false))
            ->add('horametre', 'integer', array('required' => false))
            ->add('date', 'date', array('widget' => 'single_text',
                'input' => 'string',
                'format' => 'dd/MM/yyyy',
                'required' => false,
                'read_only' => false,
                'attr' => array('class' => 'debutloc'),
            ))
            ->add('heure', 'text', array('required' => false))
            ->add('signed', 'textarea', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Bonretour'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_bonretour';
    }
}
