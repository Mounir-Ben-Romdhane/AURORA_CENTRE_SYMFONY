<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{

    private $userRepository;


    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
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
    public function addClient(Request $request)
    {
        $client = new User();

    $form = $this->createForm(UserType::class, $client);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){

        $client = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($client);
        $entityManager->flush();
        
        $this->addFlash(
            'Success',
            'Client added successfully!'
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
    }

