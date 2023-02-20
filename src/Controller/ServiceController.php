<?php

namespace App\Controller;
use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\File\File;


class ServiceController extends AbstractController
{

    private $flashBag;
        
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/serviceAffichage', name: 'app_serviceAffichage')]
    public function affichage(ServiceRepository $serviceRepository)
    {
        $service= $serviceRepository->findAll();
     

        return $this->render('service/affichage.html.twig',array ('tableauService'=> $service));
    }

    #[Route('/serviceAdd', name: 'app_addservice')]
public function addService(Request $request, ManagerRegistry $doctrine): Response
{
    $service = new Service();
    $form = $this->createForm(ServiceType::class, $service);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $image = $form->get('image')->getData();
        $fichier = md5(uniqid()) . '.' . $image->guessExtension();
        $image->move(
            $this->getParameter('images_directory'),
            $fichier
        );
        $service->setImage($fichier);

        $em = $doctrine->getManager();
        $em->persist($service);
        $em->flush();

        return $this->redirectToRoute('app_serviceAffichage');
    }

    return $this->render('service/add.html.twig', [
        "form" => $form->createView()
    ]);
}




           
    #[Route('/serviceDelete/{id}', name: 'app_deleteservice')]
    public function deleteService(Service $service,$id,ManagerRegistry $doctrine):RedirectResponse
    {
        $em = $doctrine->getManager();
        $em->remove($service);
        $em->flush();

    return $this->redirectToRoute('app_serviceAffichage');
    }


    #[Route('/serviceUpdate/{id}', name: 'app_updateservice')]
    public function editService(Request $request, Service $service,$id, ManagerRegistry $doctrine):Response
    {
       
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
            $image = $form->get('image')->getData();
            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
            $service->setImage($fichier);
    
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();
            return $this->redirectToRoute('app_serviceAffichage');

        }

       return $this->render('service/update.html.twig',[
        "form" => $form->createView()
       ]
    );
    }


#[Route('/serviceShow', name: 'app_serviceShow')]
    public function showSevice(): Response
    {
        return $this->render('service/service.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

   
    #[Route('/reservationService', name: 'app_reservationService')]
    public function reservationService(): Response
    {
        return $this->render('reservation/reservation.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
}
