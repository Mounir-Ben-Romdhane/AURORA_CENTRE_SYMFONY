<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Service;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class ReservationController extends AbstractController
{

   
    #[Route('/reservation', name: 'app_reservation')]
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    #[Route('/reservationAffichage', name: 'app_reservationAffichage')]
    public function affichage(ReservationRepository $reservationRepository)
    {
        $reservation = $reservationRepository->findAll();
        return $this->render('reservation/affichage.html.twig',array ('tableau'=> $reservation));
    }



    #[Route('/reservationService', name: 'app_addreservation')]
    public function addReservation(Request $request , ManagerRegistry $doctrine):Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $em = $doctrine->getManager();
            $em->persist(($reservation));
            $em->flush();
            $this->addFlash(
                'Success',
                'Réservation ajoutée avec succées !'
            );

            return $this->redirectToRoute('app_serviceShow');

        }

       return $this->render('reservation/reservation.html.twig',[
        "form" => $form->createView()
       ]
    );
}

    #[Route('/reservationUpdate/{id}', name: 'app_updatereservation')]
    public function editReservation(Request $request, Reservation $reservation ,$id, ManagerRegistry $doctrine):Response
    {
       
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash(
                'Success',
                'Réservation modifiée avec succées !'
            );
            return $this->redirectToRoute('app_reservationAffichage');

        }

       return $this->render('reservation/update.html.twig',[
        "form" => $form->createView()
       ]
    );
    }

    #[Route('/reservationDelete/{id}', name: 'app_deletereservation')]
        public function deleteReservation($id , ManagerRegistry $doctrine): Response
        {   
            $em = $doctrine->getManager();
            $reservation = $doctrine->getRepository(Reservation::class);
            $reservation = $reservation->find($id);
            $em->remove($reservation);
            $em->flush();
            $this->addFlash(
                'Success',
                'Réservation supprimée avec succées !'
            );
            return $this->redirectToRoute('app_reservationAffichage'); 
        }

   
        #[Route('/reservationList', name: 'app_reservationList')]
        public function reservationList(): Response
        {
            return $this->render('reservation/reservationList.html.twig', [
                'controller_name' => 'ReservationController',
            ]);
        }
    
}





