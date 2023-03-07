<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('numero', TextType::class, [
                "attr" => [
                    "placeholder" => "numero",
                    'empty_data'=>''
                ] 
            ])
            ->add('numeroTel', TextType::class, [
                "attr" => [
                    "placeholder" => "numeroTel",
                    'empty_data'=>''
                ] 
            ])
            ->add('email', TextType::class, [
                "attr" => [
                    "placeholder" => "email",
                    'empty_data'=>''
                ] 
            ])
            ->add('userName', TextType::class, [
                "attr" => [
                    "placeholder" => "userName",
                    'empty_data'=>''
                ] 
            ])

            ->add('service',EntityType::class,[
                'empty_data'=>'',
                'class'=> Service ::class,
                'choice_label'=>'titreS',
                'expanded'=>false,
                'multiple'=>false,
                ])

            ->add('dateR', DateTimeType::class)
          
            

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
