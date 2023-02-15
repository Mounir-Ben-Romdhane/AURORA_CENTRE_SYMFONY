<?php

namespace App\Controller;

use App\Entity\Participations;
use App\Repository\ParticipationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Form\ParticipationsType;



class ParticipationsController extends AbstractController
{
    #[Route('/participations', name: 'app_participations')]
    public function index(): Response
    {
        return $this->render('participations/index.html.twig', [
            'controller_name' => 'ParticipationsController',
        ]);
    }


    #[Route('/participationAffichage', name: 'app_participationAffichage')]
    public function affichage(ParticipationsRepository $participationsRepository)
    {
        $participations= $participationsRepository->findAll();
     

        return $this->render('participations/affparticipation.html.twig',array ('tableauParticipations'=> $participations));
    }


    #[Route('/ParticipationsAdd', name: 'app_addParticipations')]
    public function addParticipations(Request $request , ManagerRegistry$doctrine):Response
    {
        $participations = new Participations();
        $form = $this->createForm(ParticipationsType::class, $participations);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $em = $doctrine->getManager();
            $em->persist($participations);
            $em->flush();
        }

       return $this->render('Participations/addParticipations.html.twig',[
        "form" => $form->createView()
       ]
    );
}



#[Route('/ParticipationsDelete/{id}', name: 'app_deleteParticipations')]
    public function deleteEvenement(Participations $participations,$id,ManagerRegistry $doctrine):RedirectResponse
    {
        $em = $doctrine->getManager();
        $em->remove($participations);
        $em->flush();

    return $this->redirectToRoute('app_participationAffichage');
    }



   
    #[Route('/ParticipationsUpdate/{id}', name: 'app_updateParticipations')]
    public function editParticipations(Request $request, Participations $participations,$id, ManagerRegistry $doctrine):Response
    {
       
        $form = $this->createForm(ParticipationsType::class, $participations);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($participations);
            $em->flush();
        }

       return $this->render('Participations/updateParticipations.html.twig',[
        "form" => $form->createView()
       ]
    );
    }


}
