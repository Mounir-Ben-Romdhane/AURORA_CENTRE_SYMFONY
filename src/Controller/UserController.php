<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\ReserPasswordFormType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ReserPasswordRequestFormType;
use App\Form\ResetPasswordFormType;
use App\Service\JWTService;
use App\Service\SendMailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class UserController extends AbstractController
{

    private $userRepository;
    private $tokenGenerator;
    private $mail;
    private $passwordEncoder;
    private $jwt;


    public function __construct(
        UserRepository $userRepository,
        TokenGeneratorInterface $tokenGenerator,
        SendMailService $mail,
        UserPasswordEncoderInterface $passwordEncoder,
        JWTService $jwt,
        )
    {
        $this->userRepository = $userRepository;
        $this->tokenGenerator = $tokenGenerator;
        $this->mail = $mail;
        $this->jwt = $jwt;
        $this->passwordEncoder = $passwordEncoder;
    }

    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    //BACK et FRONT

    #[Route('/', name: 'app_front')]
    public function frontEnd(): Response
    {
        
        return $this->render('baseFront.html.twig');
    }

    #[Route('/front', name: 'app_front_front')]
    public function front(): Response
    {
        return $this->render('front.html.twig');
    }
    

    #[Route('/backEnd', name: 'app_back')]
    public function backEnd(): Response
    {
        return $this->render('baseBack.html.twig');
    }

    //CRUD CLIENT PARTIE ADMIN

    #[Route('/listClients', name: 'app_list_clients')]
    public function listClients(): Response
    {
        $clients = $this->userRepository->findAll();
        return $this->render('listClients.html.twig', [
            'clients' => $clients 
        ]);
    }

    #[Route('/addClient', name: 'app_add_client')]
    public function addClient(Request $request,SendMailService $mail)
    {
        $user = new User();

    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
        $token = $this->tokenGenerator->generateToken();
        $user->setResetToken($token);
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
                'Client added successfully! !'
            );

        return $this->redirectToRoute('app_list_clients');

    }

    return $this->render('addClient.html.twig', [
        'client' => $form->createView(),
    ]);
    }

    #[Route('/showClient/{id}', name: 'app_show_client')]
    public function showClients($id)
    {
        $client = $this->userRepository->find($id);
        return $this->render('showClient.html.twig', [
            'client' => $client
        ]);
    }


    #[Route('/editClient/{id}', name: 'app_edit_client')]
    public function editClients(User $user , Request $request)
    {
    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){

        $user = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash(
            'Success',
            'Client edited successfully!'
        );

        return $this->redirectToRoute('app_list_clients');

    }

    return $this->render('editClient.html.twig', [
        'client' => $form->createView(),
    ]);
    }
    
    #[Route('/deleteClient/{id}', name: 'app_delete_client')]
    public function deleteClients(User $user)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash(
            'Success',
            'Client removed successfully!'
        );

        return $this->redirectToRoute('app_list_clients');

    }


    //Mot de passe oublie
    #[Route('/oubli-pass', name: 'app_oublie_pass')]
    public function forgetPass(Request $request):Response
    {
        

        $form = $this->createForm(ReserPasswordRequestFormType::class);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            //On va chercher l'utilisateur par email
           //$user = $this->userRepository->findBy(array('email' => $form->get('email')->getData()));
            $user = $this->userRepository->findOneByEmail($form->get('email')->getData());
           
            //On vérifier sin on a un utilisateur 
            if($user)
            {
                $token = $this->tokenGenerator->generateToken();
                $user->setResetToken($token);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
               // dd($token);


               //On génere un lien de reanitialisation du mot de passe
               $url = $this->generateUrl('reset_pass', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
               //dd($url);

                // On crée les données du mail
                $context = compact('url','user');

                // Envoi du mail
                $this->mail->send(
                    'no-reply@aurora.tn',
                    $user->getEmail(),
                    'Réanitialisation de mot de passe',
                    'password_reset',
                    $context
                );

                $this->addFlash(
                    'Success',
                    'Email envoyer avec succès !'
                );
                return $this->redirectToRoute('app_login');
            }
            //User est null
            $this->addFlash(
                'Danger',
                'Email n\'existe pas !'
            );
    
            return $this->redirectToRoute('app_login');

        }

        return $this->render('security/reset_password_request.html.twig',[
            'requestPassForm' =>$form->createView()
        ]);
    }

    #[Route('/reset-pass/{token}', name:'reset_pass') ]
    public function resetPass(
        string $token,
        Request $request
    ): Response
    {
        // On vérifie ci on a ce token dans le base de données
        $user = $this->userRepository->findOneByResetToken($token);
        //$user = $this->userRepository->findBy(array('resetToken' => $token));

        if($user){
            $form = $this->createForm(ResetPasswordFormType::class);
            $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setResetToken('');
            $password_hashed = $this->passwordEncoder->encodePassword($user,$form->get('password')->getData());
            $user->setPassword($password_hashed);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            
            $this->addFlash(
                'Success',
                'Mot de passe changer avec succés !'
            );

            return $this->redirectToRoute('app_login');

        }


            return $this->render('security/reset_password.html.twig', [
                'passForm' => $form->createView()
            ]);
        }
        //User est null
        $this->addFlash(
            'Danger',
            'Jeton invalid !'
        );
        return $this->redirectToRoute('app_login');
    }

}

