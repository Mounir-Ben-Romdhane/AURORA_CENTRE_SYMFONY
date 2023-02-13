<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/frontEnd', name: 'app_front')]
    public function frontEnd(): Response
    {
        return $this->render('basefront.html.twig');
    }
    

    #[Route('/backEnd', name: 'app_back')]
    public function backEnd(): Response
    {
        return $this->render('baseBack.html.twig');
    }

    

}
