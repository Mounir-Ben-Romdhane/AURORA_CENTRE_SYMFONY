<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Service\JWTService;
use App\Service\SendMailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class RegisterController extends AbstractController
{

    private $passwordEncoder;
    private $tokenGenerator;
    private $jwt;
    private $userRepository;

    public function __construct(
        UserPasswordEncoderInterface $passwordEncoder,
        TokenGeneratorInterface $tokenGenerator,
        JWTService $jwt,
        UserRepository $userRepository
        )
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->tokenGenerator = $tokenGenerator;
        $this->jwt = $jwt;
        $this->userRepository = $userRepository;
    }

    #[Route('/register', name: 'app_register')]
    public function registerUser(Request $request,SendMailService $mail)
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_front');
        }
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $token = $this->tokenGenerator->generateToken();
            $user->setResetToken($token);
            $password_hashed = $this->passwordEncoder->encodePassword($user,$user->getPassword());
            $user->setPassword($password_hashed);
            $user->setRoles(['ROLE_USER']);
            $user = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();


            $entityManager->persist($user);
            $entityManager->flush();

            // On génere le JWT de l'utilisateur 
            // On crée le header
            $header = [
                'typ'=> 'JWT',
                'alg' => 'HS256'
            ];

            // On crée le payload
            $payload = [
                'user_id' => $user->getId()
            ];

            // On génère le token 
            $token = $this->jwt->generate($header, $payload , $this->getParameter('app.jwtsecret'));
             

            // On envoie un mail
            $mail->send(
                'no-reply@monsite.com',
                $user->getEmail(),
                'Activation de votre compte',
                'register',
                compact('user','token')
            );
            
            $this->addFlash(
                'Success',
                'Registration successfully !'
            );
            $this->addFlash(
                'Warning',
                ' Veuillez activer votre compte tout d\'abord ! !'
            );

            return $this->redirectToRoute('app_login');

        }

        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/verif/{token}' , name: 'verify_user')]
    public function verifyUser($token): Response
    {
        //dd($this->jwt->isValid($token));
        //dd($this->jwt->getPayload($token));
        //dd($this->jwt->isExpired($token));
        //dd($this->jwt->check($token,$this->getParameter('app.jwtsecret')));


        //On verifie si le token est valide , n'a pas expiré et n'a pas ete modifier
        if($this->jwt->isValid($token) && !$this->jwt->isExpired($token) && 
                $this->jwt->check($token,$this->getParameter('app.jwtsecret'))
        ){
            // On recupere le Payload 
            $payload = $this->jwt->getPayload($token);

            // On recupere le user de token 
            $user = $this->userRepository->find($payload['user_id']);

            // On verifier que l'utisateur existe et n'a pas encore activé son compte
            if($user && !$user->getIsVerified()){
                $user->setIsVerified(true);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->flush($user);

                $this->addFlash(
                    'Success',
                    'Utilisateur activer !'
                );
                return $this->redirectToRoute('app_login');

            }
        }

        // ici un probléme se pose de token 
        $this->addFlash(
            'Danger',
            'Le token est invalid ou a expiré !'
        );
        return $this->redirectToRoute('app_login');

    }

    #[Route('/renvoiverif' , name: 'resend_verif')]
    public function resendVerif(SendMailService $mail): Response
    {
        $user = $this->getUser();
        if(!$user){
            $this->addFlash(
                'Danger',
                'Vous devez etre connecté pour accéder a cette page !'
            );
            return $this->redirectToRoute('app_login');
        }

        if($user->getIsVerified()){
            $this->addFlash(
                'Warning',
                'Cet utilisateur est déja activé !'
            );
            return $this->redirectToRoute('app_login');
        }

        // On génere le JWT de l'utilisateur 
            // On crée le header
            $header = [
                'typ'=> 'JWT',
                'alg' => 'HS256'
            ];

            // On crée le payload
            $payload = [
                'user_id' => $user->getId()
            ];

            // On génère le token 
            $token = $this->jwt->generate($header, $payload , $this->getParameter('app.jwtsecret'));
             

            // On envoie un mail
            $mail->send(
                'no-reply@monsite.com',
                $user->getEmail(),
                'Activation de votre compte',
                'register',
                compact('user','token')
            );
            
            $this->addFlash(
                'Success',
                'Email de verification envoyé !'
            );
            return $this->redirectToRoute('app_login');

    }



}
