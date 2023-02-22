<?php

namespace App\Controller;

use App\Form\EditProfilType;
use App\Form\ResetPasswordFormType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(Request $request,UserPasswordEncoderInterface $passwordEncoder): Response
    {

        $form = $this->createForm(ResetPasswordFormType::class);
        $form->handleRequest($request);

        $user=$this->getUser();

        if($form->isSubmitted() && $form->isValid()){
            
            $password_hashed = $passwordEncoder->encodePassword($user,$form->get('password')->getData());
            $user->setPassword($password_hashed);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash(
                'Success',
                'Mot de passe changer avec succés !'
            );

            return $this->redirectToRoute('app_profil');

        }

        //$form1 = $this->createForm(UserType::class,$user);
        $form1 = $this->createForm(EditProfilType::class,$user);
        $form1->handleRequest($request);

        if($form1->isSubmitted() && $form1->isValid()){

            $entityManager1 = $this->getDoctrine()->getManager();
            $entityManager1->persist($user);
            $entityManager1->flush();

            $this->addFlash(
                'Success',
                'Profile modifie avec succés !'
            );

            return $this->redirectToRoute('app_profil');

        }

        

        return $this->render('profil/index.html.twig', [
            'passForm' => $form->createView(),
            'modifForm' => $form1->createView()
        ]);
    }
}
