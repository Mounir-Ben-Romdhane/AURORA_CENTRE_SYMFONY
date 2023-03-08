<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\User;
use App\Form\EditProfilType;
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
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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
        $password_hashed = $this->passwordEncoder->encodePassword($user,$user->getPassword());
        $user->setPassword($password_hashed);
        $user->setRoles(['ROLE_USER']);
        $user = $form->getData();
        $user->setImage("images.png");
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
                'Client ajouter avec succès !!'
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

    #[Route('/trierParName', name: 'app_trier_name_client')]
    public function triertitreev(): Response
    {
        $clients = $this->userRepository->trierName();
        return $this->render('listClients.html.twig', [
            'clients' => $clients 
        ]);
    }

    #[Route('/trierParEmail', name: 'app_trier_email_client')]
    public function trierEmail(): Response
    {
        $clients = $this->userRepository->trierEmail();
        return $this->render('listClients.html.twig', [
            'clients' => $clients 
        ]);
    }

    #[Route('/trierParTel', name: 'app_trier_tel_client')]
    public function trierTel(): Response
    {
        $clients = $this->userRepository->trierTel();
        return $this->render('listClients.html.twig', [
            'clients' => $clients 
        ]);
    }

    #[Route('/trierParAddress', name: 'app_trier_address_client')]
    public function trierAddress(): Response
    {
        $clients = $this->userRepository->trierAddress();
        return $this->render('listClients.html.twig', [
            'clients' => $clients 
        ]);
    }

    #[Route('/trierParStatus', name: 'app_trier_status_client')]
    public function trierStatus(): Response
    {
        $clients = $this->userRepository->trierStatus();
        return $this->render('listClients.html.twig', [
            'clients' => $clients 
        ]);
    }

    #[Route('/trierParEtat', name: 'app_trier_etat_client')]
    public function trierEtat(): Response
    {
        $clients = $this->userRepository->trierEtat();
        return $this->render('listClients.html.twig', [
            'clients' => $clients 
        ]);
    }

    #[Route('/bloqueClient/{id}', name: 'app_block_client')]
    public function bloqueClients($id)
    {
        $client = $this->userRepository->find($id);
        $client->setEtat(false);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($client);
        $entityManager->flush();
        $this->addFlash(
            'Success',
            ''.$client->getUserName().' bloqué avec succès !'
        );
        return $this->redirectToRoute('app_list_clients');
    }

    #[Route('/debloqueClient/{id}', name: 'app_deblock_client')]
    public function debloqueClients($id)
    {
        $client = $this->userRepository->find($id);
        $client->setEtat(true);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($client);
        $entityManager->flush();
        $this->addFlash(
            'Success',
            ''.$client->getUserName().' débloqué avec succès !'
        );
        return $this->redirectToRoute('app_list_clients');
    }


    #[Route('/editClient', name: 'app_edit_client')]
    public function editClients(Request $request)
    {

        $user = $this->getUser();
    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){

        $user = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash(
            'Success',
            'Client modifié avec succès!'
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
            'Client supprimé avec succès!'
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





    //MOBILE
    #[Route('/addClientjson', name: 'app_add_client_json')]
    public function addClientJSON(Request $request,SendMailService $mail)
    {
        $user = new User();

        $userName = $request->query->get("userName");
        $email = $request->query->get("email");
        $numTel = $request->query->get("numTel");
        //$password = $request->query->get("password");
        $address = $request->query->get("address");

        $password_hashed = $this->passwordEncoder->encodePassword($user,$request->query->get("password"));
        $user->setPassword($password_hashed);

        $user->setUsername($userName);
        $user->setEmail($email);
        $user->setNumTel($numTel);
        $user->setIsVerified(false);
        $user->setImage("images.png");
        $user->setRoles(['ROLE_USER']);
        //$user->setPassword($password);
        $user->setFullAddress($address);


       
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

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($user);
        return new JsonResponse($formatted);

    }

    #[Route('/deleteClientjson', name: 'app_delete_client_json')]
    public function deleteClientJSON(Request $request)
    {
        $id = $request->get("id");
       
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->userRepository->find($id);
        if($user!=null){
            $entityManager->remove($user);
            $entityManager->flush();
    
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("Utilisateur a ete supprimée avec success.");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id utilisateur invalid!");
        

    }


    #[Route('/modifieUserJson', name: 'app_modifier_client_json')]
    public function modifieUserJSON(Request $request)
    {
        $id = $request->get("id");
       
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->userRepository->find($id);
        if($user!=null){

            $userName = $request->query->get("userName");
            $email = $request->query->get("email");
            $numTel = $request->query->get("numTel");
            //$password = $request->query->get("password");
            $address = $request->query->get("address");
    
            //$password_hashed = $this->passwordEncoder->encodePassword($user,$user->getPassword());
            $user->setPassword($user->getPassword());
            $user->setUsername($userName);
            $user->setEmail($email);
            $user->setNumTel($numTel);
            $user->setImage("images.png");
            //$user->setPassword($password);
            $user->setRoles(['ROLE_USER']);
            $user->setIsVerified(true);
            $user->setFullAddress($address);
            $entityManager->persist($user);
            $entityManager->flush();
    
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("Utilisateur a ete modifie avec success.");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id utilisateur invalid!");

    }

    #[Route('/modifieAdminJson', name: 'app_modifier_admin_json')]
    public function modifieAdminJSON(Request $request)
    {
        $id = $request->get("id");
       
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->userRepository->find($id);
        if($user!=null){

            $userName = $request->query->get("userName");
            $email = $request->query->get("email");
            $numTel = $request->query->get("numTel");
            //$password = $request->query->get("password");
            $address = $request->query->get("address");
    
            //$password_hashed = $this->passwordEncoder->encodePassword($user,$user->getPassword());
            $user->setPassword($user->getPassword());
            $user->setUsername($userName);
            $user->setEmail($email);
            $user->setImage("images.png");
            $user->setNumTel($numTel);
            //$user->setPassword($password);
            $user->setRoles(['ROLE_ADMIN']);
            $user->setIsVerified(true);
            $user->setFullAddress($address);
            $entityManager->persist($user);
            $entityManager->flush();
    
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("Utilisateur a ete modifie avec success.");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id utilisateur invalid!");

    }

    #[Route('/displayUserJson', name: 'app_display_client_json')]
    public function displayUserJSON(Request $request)
    {
        $user = $this->userRepository->findAll();
        
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($user);
        return new JsonResponse($formatted);

    }


    #[Route('/userJson/signUp', name: 'app_signup_client_json')]
    public function SignUpUserJSON(Request $request,SendMailService $mail)
    {
        $user = new User();

        $userName = $request->query->get("userName");
        $email = $request->query->get("email");
        $numTel = $request->query->get("numTel");
        //$password = $request->query->get("password");
        $address = $request->query->get("address");
        $password_hashed = $this->passwordEncoder->encodePassword($user,$request->query->get("password"));
        

        //Controlle de saissir email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return new Response("Email invalid!");
        }
        $user->setPassword($password_hashed);
        $user->setUsername($userName);
        $user->setEmail($email);
        $user->setNumTel($numTel);
        $user->setRoles(['ROLE_USER']);
        $user->setImage("images.png");
        $user->setIsVerified(false);
        //$user->setPassword($password);
        $user->setFullAddress($address);

        try{
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

            return new JsonResponse("Account is created!",200);//Repense OK
        }catch(Exception $ex){
            return new Response("execption".$ex->getMessage());
        } 

    }

    #[Route('/userJson/signIn', name: 'app_signin_client_json')]
    public function SignInUserJSON(Request $request)
    {
        
        $email = $request->query->get("email");
        $password = $request->query->get("password");
        
        $user = $this->userRepository->findOneByEmail($email);

        if($user){
            //verif password
            if(password_verify($password,$user->getPassword())){
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted);
            }
            else{
                return new JsonResponse("Password not found!");
            }
        }
        else{
            return new JsonResponse("User not found!");
        }
    }

    #[Route('/userJson/editProfil', name: 'app_modifier_profil_json')]
    public function modifieProfilJSON(Request $request)
    {
        $id = $request->get("id");
       
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->userRepository->find($id);
        if($user!=null){

            $userName = $request->query->get("userName");
            $email = $request->query->get("email");
            $numTel = $request->query->get("numTel");
            //$password = $request->query->get("password");
            $address = $request->query->get("address");
    
            $password_hashed = $this->passwordEncoder->encodePassword($user,$request->query->get("password"));
            $user->setPassword($password_hashed);
            $user->setUsername($userName);
            $user->setEmail($email);
            $user->setNumTel($numTel);
            $user->setImage("images.png");
            //$user->setPassword($password);
            $user->setRoles(['ROLE_USER']);
            $user->setIsVerified(true);
            $user->setFullAddress($address);

            try{
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
    
                return new JsonResponse("Profil edited successfully!",200);//Repense OK
            }catch(Exception $ex){
                return new Response("execption".$ex->getMessage());
            } 
        }

        return new JsonResponse("id utilisateur invalid!");

    }
        

}
    



