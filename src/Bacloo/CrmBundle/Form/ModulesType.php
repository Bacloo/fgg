<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModulesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userid')
            ->add('username')
            ->add('module1')
            ->add('module1prix')
            ->add('module1debut')
            ->add('module1expiration')
            ->add('module1activation', 'checkbox', array('required' => false))
            ->add('module2')
            ->add('module2prix')
            ->add('module2debut')
            ->add('module2expiration')
            ->add('module2activation', 'checkbox', array('required' => false))
            ->add('module3')
            ->add('module3prix')
            ->add('module3debut')
            ->add('module3expiration')
            ->add('module3activation', 'checkbox', array('required' => false))
            ->add('module4')
            ->add('module4prix')
            ->add('module4debut')
            ->add('module4expiration')
            ->add('module4activation', 'checkbox', array('required' => false))
            ->add('module5')
            ->add('module5prix')
            ->add('module5debut')
            ->add('module5expiration')
            ->add('module5activation', 'checkbox', array('required' => false))
            ->add('module6')
            ->add('module6prix')
            ->add('module6debut')
            ->add('module6expiration')
            ->add('module6activation', 'checkbox', array('required' => false))
            ->add('module7')
            ->add('module7prix')
            ->add('module7debut')
            ->add('module7expiration')
            ->add('module7activation', 'checkbox', array('required' => false))
            ->add('module8')
            ->add('module8prix')
            ->add('module8debut')
            ->add('module8expiration')
            ->add('module8activation', 'checkbox', array('required' => false))
            ->add('module9')
            ->add('module9prix')
            ->add('module9debut')
            ->add('module9expiration')
            ->add('module9activation', 'checkbox', array('required' => false))
            ->add('module10')
            ->add('module10prix')
            ->add('module10debut')
            ->add('module10expiration')
            ->add('module10activation', 'checkbox', array('required' => false))
            ->add('module11')
            ->add('module11prix')
            ->add('module11debut')
            ->add('module11expiration')
            ->add('module11activation', 'checkbox', array('required' => false))
            ->add('module12')
            ->add('module12prix')
            ->add('module12debut')
            ->add('module12expiration')
            ->add('module12activation', 'checkbox', array('required' => false))
            ->add('userprix')
            ->add('userdebut')
            ->add('bbuseractivation')
            ->add('userexpiration')	
            ->add('usersociete')
            ->add('bb')
            ->add('bbprix')
            ->add('bbdebut')
            ->add('bbexpiration')
            ->add('bbactivation', 'checkbox', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Modules'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_modules';
    }
}
