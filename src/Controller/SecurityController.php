<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        
         if ($this->getUser()) {
            
            if(!$this->getUser()->getIsVerified()){
                $this->addFlash(
                    'Danger',
                    'Le compte est non vérifie ! veuillez vérifier votre boîte de réception !'
                );
                // get the login error if there is one
                $error = $authenticationUtils->getLastAuthenticationError();
                // last username entered by the user
                $lastUsername = $authenticationUtils->getLastUsername();

                //return $this->redirectToRoute('app_logout');

                return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
            }else{
                if (!$this->getUser()->getEtat()) {
                    $this->addFlash(
                        'Danger',
                        'Vous ete bloqué !'
                    );
                    // get the login error if there is one
                    $error = $authenticationUtils->getLastAuthenticationError();
                    // last username entered by the user
                    $lastUsername = $authenticationUtils->getLastUsername();
    
                    //return $this->redirectToRoute('app_logout');
    
                    return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
             }else{
                $this->addFlash(
                    'Succes',
                    'Seccuss !'
                );
                return $this->redirectToRoute('app_front');
             }
            }
             
         } 
          // get the login error if there is one
          $error = $authenticationUtils->getLastAuthenticationError();
          // last username entered by the user
          $lastUsername = $authenticationUtils->getLastUsername();

          return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    

}
