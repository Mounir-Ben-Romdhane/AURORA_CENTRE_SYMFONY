<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username',TextType::class,["label" => "Pseudo Name",
            "attr" => [
                'placeholder' => 'Foulen Ben Foulen'
                        ]
            ])
            ->add('email',EmailType::class,["label" => "Email" ,
            "attr" => [
                'placeholder' => 'Exemple@gmail.com'
                        ]
                        ])
            ->add('numTel',TextType::class,["label" => "Numero Telephone",
            "attr" => [
                'placeholder' => '********'
                        ]
                        ])
            ->add('fullAddress',TextType::class,["label" => "adresse complète",
            "attr" => [
                'placeholder' => 'Addresse , Code postal , Ville'
                        ]
                        ])
            ->add('password',RepeatedType::class,[
                "type" => PasswordType::class,
                "first_options" => ["label" => "Mot de passe","attr" => [
                    'placeholder' => '********'
                            ]
                        ],
                "second_options" => ["label" => "Confirmation mot de passe","attr" => [
                    'placeholder' => '********'
                            ]
                            ]
            ])
            
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
