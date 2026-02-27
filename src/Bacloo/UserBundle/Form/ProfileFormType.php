<?php

namespace Bacloo\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('required' => false))
            ->add('prenom', 'text', array('required' => false))
            ->add('activite', 'text', array('required' => false))
            ->add('usersociete', 'text', array('required' => false))
            ->add('desc_rech', 'text', array('required' => false))
            ->add('tags', 'text', array('required' => false))
            ->add('actvise', 'text', array('required' => false))
            ->add('note', 'text', array('required' => false, 'read_only' => true))
            ->add('actconnexes', 'text', array('required' => false))
            ->add('credits', 'integer', array('required' => false, 'read_only' => true))
            ->add('textaccueil', 'text', array('required' => false))
        ;
    }
	
    public function getParent()
    {
        return 'fos_user_profile';
    }	
    
    public function getName()
    {
        return 'bacloo_user_profile';
    }
}
