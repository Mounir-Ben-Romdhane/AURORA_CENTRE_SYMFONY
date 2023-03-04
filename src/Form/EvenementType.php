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
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Validator\Constraints\File;

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





            /*->add('imageev', FileType::class, [
                "attr" => [
                    "placeholder" => "imageev"
                ] 
            ])*/

            /*->add('imageev', TextType::class, [
                "attr" => [
                    "placeholder" => "imageev"
                ] 
            ])*/



            ->add('imageev', FileType::class, [
                'label' => 'imageev (img file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpg',
                            'image/jpeg',
                            'image/gif',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image document',
                    ])
                ],
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
    

            ->add('color', ColorType::class)
            
    
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
