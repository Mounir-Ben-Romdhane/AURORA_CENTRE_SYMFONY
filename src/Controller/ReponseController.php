<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReponsefrontType;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class ReponseController extends AbstractController
{
     private $flashBag;

    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }
    #[Route('/reponse/ajouterback/{id}', name: 'ajouterback_reponse')]
    public function ajouterBack(ManagerRegistry $doctrine,Request $request,$id,ReponseRepository $reponseRepository)
    {
        $responseexist=$reponseRepository->getidreclamation($id);
        $recalamation=$doctrine->getRepository(Reclamation::class)->find($id);
        $reponse=new Reponse();
        $em=$doctrine->getManager();
        $form=$this->createForm(ReponseType::class,$reponse);
        $currentDateTime = new \DateTime();
        $currentDateTime->format('Y-m-d H:i:s'); 
        $reponse->setReclamation($recalamation);
        $reponse->setDateReponse($currentDateTime);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($reponse);
            $em->flush();
            $this->flashBag->add('success', 'response added successfully');
            return $this->redirectToRoute('afficheback_reclamation');
        }
        return $this->render('reponse/addback.html.twig', [
            'controller_name' => 'ReclamationController',
            'form'=>$form->createView(),
        ]);
    }
    #[Route('/reponse/ajouter/{id}', name: 'ajouter_reponse')]
    public function ajouter(ManagerRegistry $doctrine,Request $request,$id,ReponseRepository $reponseRepository)
    {
        $responseexist=$reponseRepository->getidreclamation($id);

        if(!$responseexist) {
            return new response('you can t reply to this reponse until the admin confirmet');
        }else{
            $recalamation=$doctrine->getRepository(Reclamation::class)->find($id);
        $reponse=new Reponse();
        $em=$doctrine->getManager();
        $form=$this->createForm(ReponsefrontType::class,$reponse);
        $currentDateTime = new \DateTime();
        $currentDateTime->format('Y-m-d H:i:s'); 
        $reponse->setReclamation($recalamation);
        $reponse->setDateReponse($currentDateTime);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($reponse);
            $em->flush();
            $this->flashBag->add('success', 'response added successfully');
            return $this->redirectToRoute('affiche_reclamation');
        }
        return $this->render('reponse/add.html.twig', [
            'controller_name' => 'ReclamationController',
            'form'=>$form->createView(),
        ]);
        }

    }
    #[Route('/reponse/delete/{id}', name: 'delete_reponse')]
    public function delete(ManagerRegistry $doctrine,int $id)
    {
        $em=$doctrine->getManager();
        $response=$doctrine->getRepository(Reponse::class)->find($id);
        if(!$response){
            return new Response("no response found with that id");
        }else{
            $em->remove($response);
            $em->flush();
            $this->flashBag->add('success', 'response deleted successfully');
            return $this->redirectToRoute('afficheback_reclamation');
        }
    }
    #[Route('/reponse/afficheback/{id}',name:'afficheback_reponse')]
    public function afficheback(ManagerRegistry $doctrine,$id,ReponseRepository $reponseRepository)
    {
        $response=$reponseRepository->get_par_idreclamation($id);
       
            return $this->render("reponse/afficheback.html.twig",
            array('responses'=>$response));
        
        
    }
    #[Route('/reponse/affiche/{id}',name:'affiche_reponse')]
    public function affiche(ManagerRegistry $doctrine,$id)
    {
        $response=$doctrine->getRepository(Reponse::class)->find($id);
       
            return $this->render("reponse/afficheback.html.twig",
            array('responses'=>$response));
        
        
    }
    #[Route('reponse/update/{id}',name:"update_reponse")]
    public function update(ManagerRegistry $doctrine,$id,Request $request){
        $em=$doctrine->getManager();
        $reponse=$doctrine->getRepository(ReponsefrontType::class)->find($id);
        if(!$reponse){
            return new Response("no claim found with this id");
        }else{
           $form=$this->createForm(ReponseType::class,$reponse);
           $form->handleRequest($request); 
           if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->flashBag->add('success', 'response updated successfully');
            return $this->redirectToRoute('affiche_reponse');
            
           }
        }
        return $this->render('reponse/update.html.twig',
            ['form'=>$form->createView(),

            ]);
    }
    #[Route('reponse/updateback/{id}',name:"updateback_reponse")]
    public function updateback(ManagerRegistry $doctrine,$id,Request $request){
        $em=$doctrine->getManager();
        $reponse=$doctrine->getRepository(Reponse::class)->find($id);
        if(!$reponse){
            return new Response("no claim found with this id");
        }else{
           $form=$this->createForm(ReponseType::class,$reponse);
           $form->handleRequest($request); 
           if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->flashBag->add('success', 'response updated successfully');
            return $this->redirectToRoute('afficheback_reclamation');
           }
        }
        return $this->render('reponse/update.html.twig',
            ['form'=>$form->createView(),

            ]);
    }
   
}
