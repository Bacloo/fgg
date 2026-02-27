<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LogistiqueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$roleuser = 'chauffeur';
        $builder
            ->add('client')
            ->add('nomchantier')
            ->add('adresse1')
            ->add('adresse2')
            ->add('adresse3')
            ->add('cp')
            ->add('ville')
            ->add('materiel')
            ->add('typemateriel')
            ->add('contactchantier')
            ->add('codecontrat')
            ->add('codelocations')
            ->add('typetransport')
            ->add('etatlog')
            ->add('date')
			->add('memolog','textarea', array('required' => false))
            ->add('ordretransport', 'choice', array(
					'choices'   => array(
						'1' => '1',
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
						'5'	=> '5',
						'7' => '7',
						'8' => '8',
						'9' => '9',
						'10'=> '10',
					),
					'multiple'  => false,
				))
            ->add('user', 'entity', array(
                    'class' => 'BaclooUserBundle:User',
                    'query_builder' => function ($repository) use ($roleuser){return $repository->createQueryBuilder('p')
																->where('p.roleuser = :roleuser')
																->setParameter('roleuser', $roleuser);},				
                    'property' => 'username',
                ));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Logistique'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_logistique';
    }
}
