<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BrappelsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		include('societe.php');
        $builder
            ->add('date', 'date', array('widget' => 'single_text',
										'input' => 'string',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'attr' => array('class' => 'date'),
										))
            ->add('rapTexte', 'text', array('required' => false))
            ->add('user', 'choice', array(
					'choices'   => array(
						'Bureau'   => 'Bureau',
						'Bureau2'   => 'Bureau2',
					),
					'multiple'  => false,
				))
            // ->add('user', 'entity', array(
                    // 'class' => 'BaclooUserBundle:User',
                    // 'query_builder' => function ($repository) use ($societe){return $repository->createQueryBuilder('p')
																// ->where('p.usersociete = :usersociete')
																// ->setParameter('usersociete', $societe);},				
                    // 'property' => 'username',
                // ))
			->add('entreprise', 'text', array('required' => false))
			->add('afaire', 'checkbox', array('required' => false))
			->add('rdv', 'checkbox', array('required' => false))
            ->add('cp', 'text', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Brappels'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_brappels';
    }
}
