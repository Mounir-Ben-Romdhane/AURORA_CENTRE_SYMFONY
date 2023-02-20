<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titreS', TextType::class, [
            "attr" => [
                "placeholder" => "titreS",
                'empty_data'=>''
            ] 
        ])
        ->add('descriptionS', TextType::class, [
            "attr" => [
                "placeholder" => "descriptionS",
                'empty_data'=>''
            ] 
        ])
        ->add('typeS', ChoiceType::class, [
            'choices' => [
                "" => "",
                "Médecine douce"  => "Médecine douce",
                "Coaching"  => "Coaching",
                "Consultation"  => "Consultation",
            ],
            'empty_data'=>''
        ])
        ->add('image', FileType::class, [
            "attr" => [
                'label' => 'Image',
                'required' => 'false',
                'data_class'=> null
            ] 
        ])
        
        ->add('dateS', DateTimeType::class)

        

     

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
