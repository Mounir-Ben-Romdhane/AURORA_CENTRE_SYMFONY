<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use App\Repository\ServiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EvenementController extends AbstractController
{
    #[Route('/evenement', name: 'app_evenement')]
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    #[Route('/evenementAffichage', name: 'app_evenementAffichage')]
    public function affichage(EvenementRepository $evenementRepository)
    {
        $evenement= $evenementRepository->findAll();
     

        //return $this->render('evenement/index.html.twig',array ('tableauEvenement'=> $evenement));
        return $this->render('evenement/index.html.twig',array ('tableauEvenement'=> $evenement));

        $this->addFlash('Success','Evenement ajoute avec succes!');
    }

    #[Route('/evenementAdd', name: 'app_addevenement')]
    public function addEvenement(Request $request , ManagerRegistry$doctrine):Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $em = $doctrine->getManager();
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('app_evenementAffichage');

            $this->addFlash('Success','Evenement ajoute avec succes!');
              }

       return $this->render('evenement/add.html.twig',[
        "form" => $form->createView()
       ]
    );
}



#[Route('/evenementDelete/{id}', name: 'app_deleteevenement')]
    public function deleteEvenement(Evenement $evenement,$id,ManagerRegistry $doctrine):RedirectResponse
    {
        $em = $doctrine->getManager();
        $em->remove($evenement);
        $em->flush();

    return $this->redirectToRoute('app_evenementAffichage');
    }



    #[Route('/evenementUpdate/{id}', name: 'app_updateevenement')]
    public function editEvenement(Request $request, Evenement $evenement,$id, ManagerRegistry $doctrine):Response
    {
       
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('app_evenementAffichage');
        }

       return $this->render('evenement/update.html.twig',[
        "form" => $form->createView()
       ]
    );
    }


    
}
