<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('type',ChoiceType::class,[
            
            'choices'=>[
                ' '=>'',
                'Problèmes achat en ligne' => 'Problèmes achat en ligne',
                'Problèmes de navigation sur le site' => 'Problèmes de navigation sur le site',
                'Problèmes de qualité de produits ou de services' => 'Problèmes de qualité de produits ou de services',
                'Problèmes de confidentialité et de sécurité des données'=>'Problèmes de confidentialité et de sécurité des données',
                'autre'=>''

            ],
            
            'empty_data' => '',
        ])
            ->add('nom',TypeTextType::class,[
                'empty_data' => '',
                
            ])
            ->add('emailreclamation',TypeTextType::class,[
                'empty_data'=>'',
            ])
            ->add('description',TextareaType::class,[
                'empty_data' => '',
               
            ])
            
            ->add('save',SubmitType::class)
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
