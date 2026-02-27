<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticlesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$categories = ['fa fa-lightbulb-o' => 'Astuce'
					, 'fa fa-info'=> 'Info'
					, 'fa fa-question'=> 'Question'
					, 'fa fa-check'=> 'Autre'];
        $builder
            ->add('date')
            ->add('titre', 'text')
            ->add('texte','textarea')
            ->add('auteur', 'text', array('required' => false))
            ->add('sharepartenaire', 'checkbox', array('required' => false))
            ->add('shareall', 'checkbox', array('required' => false))
            ->add('transfereur', 'text', array('required' => false))
            ->add('replytitre', 'text', array('required' => false))
            ->add('replytexte', 'textarea', array('required' => false))
            ->add('categorie', 'choice', [
            'choices' => $categories,
            'multiple' => false,
            'label_attr' => array(
           'class' => 'checkbox-inline'
       ),
            'expanded' => true
        ]);
    } 
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Articles'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_articles';
    }
}
