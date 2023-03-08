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
use Symfony\Component\Security\Core\Security;
use Dompdf\Dompdf;

class ReservationController extends AbstractController
{

    private $security;
    
    public function __construct(Security $security)
    {
        $this->security=$security;
    }
   
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

        $user = $this->security->getUser();
        if(!$user){
            $reservation->setEmailConnect("");
        }else{
            $useridentifier=$this->security->getUser()->getUserIdentifier();
            $reservation->setEmailConnect($useridentifier);
        }
        
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


        #[Route('/reservationListByEmail',name:"affiche_reservation_byemail")]
    public function affichebyemail(ManagerRegistry $doctrine,ReservationRepository $reservationRepository)
    {
        $useridentifier=$this->security->getUser()->getUserIdentifier();
        $reservation=$reservationRepository->getclaimbyemail($useridentifier);
        if(!$reservation){
            return new Response("no claim found");
        }else{
            return $this->render("reservation/reservationList.html.twig",
            array('reservations'=>$reservation)

            );
        }
    }



    #[Route('/reservationUpdateUser/{id}', name: 'app_updatereservationUser')]
    public function editReservationUser(Request $request, Reservation $reservation ,$id, ManagerRegistry $doctrine):Response
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
            return $this->redirectToRoute('affiche_reservation_byemail');

        }

        
       return $this->render('reservation/updateUser.html.twig',[
        "form" => $form->createView()
       ]
    );
    }

    #[Route('/reservationDeleteUser/{id}', name: 'app_deletereservationUser')]
        public function deleteReservationUser($id , ManagerRegistry $doctrine): Response
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
            return $this->redirectToRoute('affiche_reservation_byemail'); 
     
        }




        
        #[Route('/reservationpdf', name: 'app_reservationpdf')]
        public function pdfreser(ManagerRegistry $doctrine,ReservationRepository $reservationRepository): Response
        {
            $dompdf = new Dompdf();
           
            $reservation = $reservationRepository->findAll();
            // Load some HTML content into the document
            $html=$this->render('reservation/pdfResrv.html.twig', [
                'reservations' => $reservation
            ]);
              
            // Load the HTML content into the Dompdf instance
            $dompdf->loadHtml($html);
    
            // Set the paper size and orientation (optional)
            $dompdf->setPaper('A3', 'portrait');
    
            // Render the HTML content as a PDF document
            $dompdf->render();
    
            // Output the PDF document to the browser for download
            $response = new Response($dompdf->output());
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-Disposition', 'attachment; filename="Rapport.pdf"');
    
            return $response;
            
            return $this->render('reservation/pdfResrv.html.twig', [
                array('reservations'=>$reservation)
            ]);
        }
       

        #[Route('/reservationTrier', name: 'app_trierreservation')]
        public function trierReservation(ReservationRepository $reservationRepository)
        {
            $reservation=$reservationRepository->trierReservation();
            return $this->render('reservation/affichage.html.twig',[
                "tableau"=>$reservation
            ]);
        }
        #[Route('/reservationTrier2', name: 'app_trierreservation2')]
        public function trierReservation2(ReservationRepository $reservationRepository)
        {
            $reservation=$reservationRepository->trierReservation2();
            return $this->render('reservation/affichage.html.twig',[
                "tableau"=>$reservation
            ]);
        }
        #[Route('/reservationTrierFront', name: 'app_trierreservationfront')]
        public function trierReservationFront(ReservationRepository $reservationRepository)
        {
            $reservation=$reservationRepository->trierReservationFront();
            return $this->render('reservation/reservationList.html.twig',[
                "reservations"=>$reservation
            ]);
        }
        #[Route('/reservationTrierFront2', name: 'app_trierreservationfront2')]
        public function trierReservationFront2(ReservationRepository $reservationRepository)
        {
            $reservation=$reservationRepository->trierReservationFront2();
            return $this->render('reservation/reservationList.html.twig',[
                "reservations"=>$reservation
            ]);
        }
       



        
        #[Route('/reservation/orderbyservice', name: 'reservation_orderbyservice', methods: ['GET'])]
        public function orderByService(Request $request, ReservationRepository $reservationRepository): Response
        {
            $reservation = $reservationRepository->orderByService();
        
            return $this->render('reservation/reservationList.html.twig', [
                'reservations' => $reservation,
            ]);
        }
        #[Route('/reservation/orderbyserviceDESC', name: 'reservation_orderbyserviceDESC', methods: ['GET'])]
        public function orderByServiceDESC(Request $request, ReservationRepository $reservationRepository): Response
        {
            $reservation = $reservationRepository->orderByServiceDESC();
        
            return $this->render('reservation/reservationList.html.twig', [
                'reservations' => $reservation,
            ]);
        }
        
}





