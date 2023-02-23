<?php

namespace App\Form;

use App\Entity\Participationns;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ParticipationnsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('descriptionPn', TextType::class, [
            "attr" => [
                "placeholder" => "Commentaire"
            ] 
        ])
        ->add('usernameev', TextType::class, [
            "attr" => [
                "placeholder" => "Nom"
            ] 
        ])
        ->add('emailev', EmailType::class, [
            "attr" => [
                "placeholder" => "Email"
            ] 
        ])
        /*->add('telephoneev', TextType::class, [
            "attr" => [
                "placeholder" => "telephoneev"
            ] 
        ])*/
        ->add('numtelev', TextType::class, [
            "attr" => [
                "placeholder" => "Telephone"
            ] 
        ])
        ->add('save', SubmitType::class); 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participationns::class,
        ]);
    }
}
