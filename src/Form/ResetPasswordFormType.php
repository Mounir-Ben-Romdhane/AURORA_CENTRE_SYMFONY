<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints\Length;

class ResetPasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password',RepeatedType::class,[
                "type" => PasswordType::class,
                'required' => true,
                'constraints' => [new Length(['min' => 5])],
                "first_options" => ["label" => "Entrer votre Mot de passe",
                "attr" => [
                    'placeholder' => '********'
                ],
                
            ],
                "second_options" => ["label" => "Confirmation votre mot de passe",
                "attr" => [
                    'placeholder' => '********'
                            ]],
            
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
