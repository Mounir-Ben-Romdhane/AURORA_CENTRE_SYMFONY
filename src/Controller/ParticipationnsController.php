<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Participationns;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ParticipationnsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Form\ParticipationnsType;


class ParticipationnsController extends AbstractController
{
    #[Route('/participationns', name: 'app_participationns')]
    public function index(): Response
    {
        return $this->render('participationns/index.html.twig', [
            'controller_name' => 'ParticipationnsController',
        ]);
    }

    #[Route('/participationnAffichage', name: 'app_participationnAffichage')]
    public function affichage(ParticipationnsRepository $participationnsRepository)
    {
        $participationns= $participationnsRepository->findAll();
     

        return $this->render('participationns/affparticipationn.html.twig',array ('tableauParticipationns'=> $participationns));
    }


    #[Route('/ParticipationnsAdd/{id}', name: 'app_addParticipationns')]
    public function addParticipationns(Request $request , $id,ManagerRegistry$doctrine):Response
    {
        $evenement=$doctrine->getRepository(Evenement::class)->find($id);
        $participationns = new Participationns();
        $form = $this->createForm(ParticipationnsType::class, $participationns);
        $form->handleRequest($request);
        $participationns->setEvenement($evenement);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $em = $doctrine->getManager();
            $em->persist($participationns);
            $em->flush();
            return $this->redirectToRoute('app_participationnAffichage');
        }
       return $this->render('Participationns/addParticipationns.html.twig',[
        "form" => $form->createView()
       ]
    );
}



#[Route('/ParticipationnsDelete/{id}', name: 'app_deleteParticipationns')]
    public function deleteEvenement(Participationns $participationns,$id,ManagerRegistry $doctrine):RedirectResponse
    {
        $em = $doctrine->getManager();
        $em->remove($participationns);
        $em->flush();

    return $this->redirectToRoute('app_participationnAffichage');
    }



   
    #[Route('/ParticipationnsUpdate/{id}', name: 'app_updateParticipationns')]
    public function editParticipationns(Request $request, Participationns $participationns,$id, ManagerRegistry $doctrine):Response
    {
       
        $form = $this->createForm(ParticipationnsType::class, $participationns);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($participationns);
            $em->flush();
            return $this->redirectToRoute('app_participationnAffichage');
        }

       return $this->render('Participationns/updateParticipationns.html.twig',[
        "form" => $form->createView()
       ]
    );
    }


}
