<?php

namespace Bacloo\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormError;

class LocationsslcloneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeclient', 'integer', array('required' => false))
            ->add('entid', 'integer', array('required' => false))
            ->add('entreprise', 'text', array('required' => false))
            ->add('machineid', 'integer', array('required' => false))
            ->add('codemachine', 'text', array('required' => true))
            ->add('codemachineinterne', 'text', array('required' => false))
            ->add('typemachine', 'text')
            ->add('typemachineinit', 'text', array('required' => false))
            ->add('etatloc', 'text', array('required' => false))
            ->add('loueur', 'text', array('required' => false))
            ->add('loueurid', 'integer', array('required' => false))
            ->add('loyerp1', 'number', array('required' => false))
            ->add('loyerp2', 'number', array('required' => false))
            ->add('loyerp3', 'number', array('required' => false))
            ->add('loyerp4', 'number', array('required' => false))
            ->add('loyermensuel', 'number', array('required' => false))
            ->add('nbjloc', 'number', array('required' => false))
            ->add('nbjlocass', 'integer', array('required' => false))
            ->add('montantloc', 'number', array('required' => false))
            ->add('litrescarb', 'number', array('required' => false))
            ->add('montantcarb', 'number', array('required' => false))
            ->add('energie', 'text', array('required' => false))
//            ->add('datereprise', 'date', array('widget' => 'single_text',
//										'input' => 'string',
//										'format' => 'dd/MM/yyyy',
//										'required' => false,
//										'read_only' => false,
//										'attr' => array('class' => 'datereprise'),
//										))
            ->add('debutloc', 'date', array('widget' => 'single_text',
										'input' => 'string',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'read_only' => false,
										'attr' => array('class' => 'debutloc'),
										))
            ->add('finloc', 'date', array('widget' => 'single_text',
										'input' => 'string',
										'format' => 'dd/MM/yyyy',
										'required' => false,
										'read_only' => false,
										'attr' => array('class' => 'finloc'),
										))
            ->add('transportaller', 'number', array('required' => false))
            ->add('transportretour', 'number', array('required' => false))
            ->add('transport')
            ->add('contributionverte', 'checkbox', array('required' => false))
            ->add('assurance', 'checkbox', array('required' => false, 'data' => true))
            ->add('jour50', 'integer', array('required' => false))
            ->add('jour100', 'integer', array('required' => false))
            ->add('cloture', 'integer', array('required' => false))
            ->add('remise', 'number', array('required' => false))
			;
			
//        $myExtraFieldValidator = function(FormEvent $event){
//            $form = $event->getForm();
//            $myExtraField1 = $form->get('loyerp1')->getData();
//			$i = 0;
//            if(empty($myExtraField1)) {
//              $i++;
//            }
//            $myExtraField2 = $form->get('loyerp2')->getData();
//            if(empty($myExtraField2)) {
//              $i++;
//            }
//            $myExtraField3 = $form->get('loyerp3')->getData();
//            if(empty($myExtraField3)) {
//              $i++;
//            }
//            $myExtraField4 = $form->get('loyerp4')->getData();
//            if(empty($myExtraField4)) {
//              $i++;
//            }
//            $myExtraField5 = $form->get('loyermensuel')->getData();
//            if(empty($myExtraField5)) {
//              $i++;
//            }
//			if($i == 5)
//			{
//				$myExtraField1 = $form->get('loyerp1')->getData();
//				if(empty($myExtraField1)) {
//				  $form['loyerp1']->addError(new FormError("Vous de renseigner un loyer pour continuer"));
//				}
//				$myExtraField2 = $form->get('loyerp2')->getData();
//				if(empty($myExtraField2)) {
//				  $form['loyerp2']->addError(new FormError("Vous de renseigner un loyer pour continuer"));
//				}
//				$myExtraField3 = $form->get('loyerp3')->getData();
//				if(empty($myExtraField3)) {
//				  $form['loyerp3']->addError(new FormError("Vous de renseigner un loyer pour continuer"));
//				}
//				$myExtraField4 = $form->get('loyerp4')->getData();
//				if(empty($myExtraField4)) {
//				  $form['loyerp4']->addError(new FormError("Vous de renseigner un loyer pour continuer"));
//				}
//				$myExtraField5 = $form->get('loyermensuel')->getData();
//				if(empty($myExtraField5)) {
//				  $form['loyermensuel']->addError(new FormError("Vous de renseigner un loyer pour continuer"));
//				}
//			}
//		};
//
//        // adding the validator to the FormBuilderInterface
//        $builder->addEventListener(FormEvents::POST_BIND, $myExtraFieldValidator);
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bacloo\CrmBundle\Entity\Locationsslclone'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bacloo_crmbundle_locationsslclone';
    }
}
