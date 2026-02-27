<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('besoins')
            ->add('raisonSociale')
			->add('nom')
			->add('activite')
			->add('cp')
			->add('ville')
			->add('cperso1')
			->add('cperso2')
			->add('cperso3')
			->add('memo')
			->add('histo')
			->add('fonction')
            ->add('besoinfilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('rsfilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('nomfilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('activitefilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('cpfilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
						'superieur' => 'Supérieur à',
						'inferieur' => 'Inférieur à',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('villefilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('cperso1filter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
						'superieur' => 'Supérieur à',
						'inferieur' => 'Inférieur à',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('cperso2filter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
						'superieur' => 'Supérieur à',
						'inferieur' => 'Inférieur à',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('cperso3filter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
						'superieur' => 'Supérieur à',
						'inferieur' => 'Inférieur à',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('memofilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('histofilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
            ->add('fonctionfilter', 'choice', array(
					'choices'   => array(
						'commencepar'   => 'Commence par',
						'contient' => 'Contient',
					),
					'multiple'  => false,
					'mapped'  => false,
				))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Search'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_search';
    }
}
