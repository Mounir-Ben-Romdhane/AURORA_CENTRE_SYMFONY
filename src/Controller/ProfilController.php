<?php

namespace App\Controller;

use App\Form\EditProfilType;
use App\Form\ImageFormType;
use App\Form\ResetPasswordFormType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProfilController extends AbstractController
{
    #[Route('/profilAdmin', name: 'app_profil')]
    public function index(Request $request,UserPasswordEncoderInterface $passwordEncoder
            , SluggerInterface $slugger): Response
    {

        $form = $this->createForm(ResetPasswordFormType::class);
        $form->handleRequest($request);

       

        if($form->isSubmitted() && $form->isValid()){

            
            $user=$this->getUser();
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
        $form1 = $this->createForm(EditProfilType::class);
        $form1->handleRequest($request);

        if($form1->isSubmitted() && $form1->isValid()){
            $user1=$this->getUser();
            $user1->setUsername($form1->get('username')->getData());
            $user1->setFullAddress($form1->get('fullAddress')->getData());
            $user1->setNumTel($form1->get('numTel')->getData());
            $entityManager1 = $this->getDoctrine()->getManager();
            $entityManager1->persist($user1);
            $entityManager1->flush();

            $this->addFlash(
                'Success',
                'Profile modifie avec succés !'
            );

            return $this->redirectToRoute('app_profil');

        }

        $formImage = $this->createForm(ImageFormType::class);
        $formImage->handleRequest($request);

        if($formImage->isSubmitted() && $formImage->isValid()){
            $user3=$this->getUser();
            $photo = $formImage->get('photo')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'.'.$photo->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $photo->move(
                        $this->getParameter('user_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $user3->setImage($newFilename);
                $this->addFlash(
                    'Success',
                    'Photo modifie avec succés !'
                );
                $entityManager1 = $this->getDoctrine()->getManager();
                $entityManager1->persist($user3);
                $entityManager1->flush();
    
                return $this->redirectToRoute('app_profil');
            }
            
        }

        

        return $this->render('profil/index.html.twig', [
            'passForm' => $form->createView(),
            'modifForm' => $form1->createView(),
            'modifImage' => $formImage->createView()
        ]);
    }


    #[Route('/profilClient', name: 'app_profilClient')]
    public function profilClient(Request $request,UserPasswordEncoderInterface $passwordEncoder): Response
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

            return $this->redirectToRoute('app_profilClient');

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

            return $this->redirectToRoute('app_profilClient');

        }

        

        return $this->render('profil/profilClient.html.twig', [
            'passForm' => $form->createView(),
            'modifForm' => $form1->createView()
        ]);
    }

}
