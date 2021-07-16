<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, [
            'attr' => [
                'maxLength' => 100,
                'placeholder' => 'Votre nom'                   
            ],
            'label' => 'Nom' 
        ])
        ->add('prenom', TextType::class, [
            'attr' => [
                'maxLength' => 100,
                'placeholder' => 'Votre prenom',

            ],
            'label' => 'Prénom'  
        ])
        
        ->add('email', EmailType::class, [
            'attr' => [
                'maxLength' => 100,
                'placeholder' => 'Votre email'                   
            ],
            'label' => 'Email'
        ])
        ->add('objet', TextType::class, [
            'attr' => [
                'maxLength' => 250,
                'placeholder' => 'Votre prenom',

            ],
            'label' => 'Objet'  
        ])
        ->add('message', TextareaType::class, [
            'attr' => [
                'minLength' => 50,
                'maxLength' => 1000,
                'placeholder' => 'Votre message'
            ],
            'help' => '1000 caractères maximum',
            'label' => 'Message'
        ])
        ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
