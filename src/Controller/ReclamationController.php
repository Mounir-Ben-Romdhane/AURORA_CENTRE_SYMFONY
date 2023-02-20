<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Core\Security;

class ReclamationController extends AbstractController
{
    
    private $flashBag;
    private $security;

    public function __construct(FlashBagInterface $flashBag,Security $security)
    {
        $this->flashBag = $flashBag;
        $this->security = $security;
    }
    #[Route('/reclamation/ajouter', name: 'ajouter_reclamation')]
    public function ajouter(ManagerRegistry $doctrine,Request $request): Response
    {
        $reclamation=new Reclamation();
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $reclamation->setStatus("en cours");
        $currentDateTime = new \DateTime();
        $currentDateTime->format('Y-m-d H:i:s');
        $reclamation->setDateReclamation($currentDateTime);
        $em=$doctrine->getManager();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            
            $em->persist($reclamation);
            $em->flush();
            $this->flashBag->add('success', 'Form submited successfully');
           
            
            
        }

        return $this->render('reclamation/add.html.twig', [
            'controller_name' => 'ReclamationController',
            'form'=>$form->createView(),
        ]);
    }
    #[Route('/reclamation/delete/{id}', name:"delete_reclamation")]
    public function delete(ManagerRegistry $doctrine,Request $request,$id)
    {
        $em=$doctrine->getManager();
        $reclamation=$doctrine->getRepository(Reclamation::class)->find($id);
        if(!$reclamation){
            return new Response("claim not found "); 
        }else{
            $em->remove($reclamation);
            $em->flush();
            $this->flashBag->add('success', 'claim deleted successfully');
            return $this->redirectToRoute('affiche_reclamation');    
        } 
    }
    #[Route('/reclamation/affiche',name:"affiche_reclamation")]
    public function affiche(ManagerRegistry $doctrine)
    {
        $reclamation=$doctrine->getRepository(Reclamation::class)->findAll();
        if(!$reclamation){
            return new Response("no claim found");
        }else{
            return $this->render("reclamation/affiche.html.twig",
            array('reclamations'=>$reclamation)

            );
        }
    }
    #[Route('reclamation/affichebyemail',name:"affiche_reclamation_byemail")]
    public function affichebyemail(ManagerRegistry $doctrine,ReclamationRepository $reclamationRepository)
    {
        $useridentifier=$this->security->getUser()->getUserIdentifier();
        $reclamation=$reclamationRepository->getclaimbyemail($useridentifier);
        if(!$reclamation){
            return new Response("no claim found");
        }else{
            return $this->render("reclamation/affiche.html.twig",
            array('reclamations'=>$reclamation)

            );
        }
    }

    #[Route('/reclamation/update/{id}',name:"update_reclamation")]
    public function update(ManagerRegistry $doctrine,$id,Request $request){
        $em=$doctrine->getManager();
        $reclamation=$doctrine->getRepository(Reclamation::class)->find($id);
        if(!$reclamation){
            return new Response("no claim found with this id");
        }else{
           $form=$this->createForm(ReclamationType::class,$reclamation);
           $form->handleRequest($request); 
           if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->flashBag->add('success', 'Form updated successfully');
            return $this->redirectToRoute('affiche_reclamation');
            
           }
        }
        return $this->render('reclamation/update.html.twig',
            ['form'=>$form->createView(),
 
            ]);
    }
}
