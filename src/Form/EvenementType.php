<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('titreev', TextType::class, [
                'empty_data' => '',
                "attr" => [
                    "placeholder" => "titreev"
                ] 
            ])
            ->add('descriptionev', TextType::class, [
                'empty_data' => '',
                "attr" => [
                    "placeholder" => "descriptionev"
                ] 
            ])
            ->add('imageev', TextType::class, [
                "attr" => [
                    "placeholder" => "imageev"
                ] 
            ])
    
            ->add('dateev', DateTimeType::class)

            

            ->add('typeev', ChoiceType::class, [
                'choices' => [
                    "" => "",
                    "sport"  => "sport",
                    "musique"  => "musique",
                    "meditation"  => "meditation",
                    "sante"  => "sante",
                ]
            ])
    
            
    
            ->add('save', SubmitType::class); 

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
