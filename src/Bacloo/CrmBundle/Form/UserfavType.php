<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserfavType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userid')
            ->add('favoris', 'collection', array(
			'type'         => new FavorisType(),
			  'allow_add'    => true,
			  'allow_delete' => true,
			  'required'     => false	
		  ));			
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Userfav'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_userfav';
    }
}
