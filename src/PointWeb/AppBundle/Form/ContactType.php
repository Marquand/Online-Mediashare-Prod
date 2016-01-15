<?php

namespace PointWeb\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', 'text', array(
                "label" => "Nom :",
                'attr' => array('class' => 'form-control','placeholder'=>'Nom et Prénom'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            
            ->add('phone', 'text', array(
                "label" => "Téléphone",
                'attr' => array('class' => 'form-control', 'placeholder'=>'Téléphone'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('email', 'text', array(
                "label" => "Email :",
                'attr' => array('class' => 'form-control', 'placeholder'=>'Email'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('address', 'text', array(
                "label" => "Adresse :",
                'attr' => array('class' => 'form-control', 'placeholder'=>'Adresse'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('message', 'textarea', array(
                "label" => "Message :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'form-control m-b-20'),
            ));
            
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\AppBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_appbundle_contact';
    }
}
