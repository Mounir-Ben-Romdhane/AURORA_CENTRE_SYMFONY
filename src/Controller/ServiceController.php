<?php

namespace App\Controller;
use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
<<<<<<< Updated upstream
=======
use Symfony\Bundle\FrameworkBundle\Routing\RedirectableCompiledUrlMatcher;
>>>>>>> Stashed changes
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< Updated upstream
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\File\File;


class ServiceController extends AbstractController
{

    private $flashBag;
        
=======
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class ServiceController extends AbstractController
{
   
        private $flashBag;
    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
       
    }

>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
    #[Route('/serviceAdd', name: 'app_addservice')]
public function addService(Request $request, ManagerRegistry $doctrine): Response
=======
    
    
    #[Route('/serviceAffichageFront', name: 'app_serviceAffichageFront')]
    public function affichageFront(ServiceRepository $serviceRepository)
    {
        $service= $serviceRepository->findAll();
     

        return $this->render('service/serviceList.html.twig', ['tableauServiceFront'=> $service]);
    }


    #[Route('/serviceAdd', name: 'app_addservice')]
public function addService(Request $request, ManagerRegistry $doctrine,SluggerInterface $slugger): Response
>>>>>>> Stashed changes
{
    $service = new Service();
    $form = $this->createForm(ServiceType::class, $service);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
<<<<<<< Updated upstream
        $image = $form->get('image')->getData();
=======
         /* $image = $form->get('image')->getData();
>>>>>>> Stashed changes
        $fichier = md5(uniqid()) . '.' . $image->guessExtension();
        $image->move(
            $this->getParameter('images_directory'),
            $fichier
        );
<<<<<<< Updated upstream
        $service->setImage($fichier);

=======
        $service->setImage($fichier);*/

        $photo = $form->get('image')->getData();

            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
              
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photo->guessExtension();
                try {
                    $photo->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {          
                }
                $service->setImage($newFilename);
            }

            /*
            $imageev= $form->get('imageev')->getData();
            $fichier = md5(uniqid()) . '.' . $imageev->guessExtension();
            $imageev ->move(
                $this->getParameter('images_directory'),
            );
            $evenement->setImageev($fichier);*/


        
>>>>>>> Stashed changes
        $em = $doctrine->getManager();
        $em->persist($service);
        $em->flush();

<<<<<<< Updated upstream
=======
        $this->flashBag->add('success','Service added successfully !');

>>>>>>> Stashed changes
        return $this->redirectToRoute('app_serviceAffichage');
    }

    return $this->render('service/add.html.twig', [
        "form" => $form->createView()
    ]);
}




<<<<<<< Updated upstream
           
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
       
=======
#[Route('/serviceDelete/{id}', name: 'app_deleteservice')]
public function deleteService(Service $service, $id, ManagerRegistry $doctrine)
{
    $em = $doctrine->getManager();

    $relatedEntities = $service->getReservations();

    if ($relatedEntities->count() > 0) {
        return new Response('Cette sevice ne peut pas être supprimée car elle est liée à un ou plusieurs réservations');
    }

    $em->remove($service);
    $em->flush();

    $this->flashBag->add('success','Service deleted successfully !');

    return $this->redirectToRoute("app_serviceAffichage");
}




    #[Route('/serviceUpdate/{id}', name: 'app_updateservice')]
    public function editService(Request $request,$id, ManagerRegistry $doctrine):Response
    {
        $em = $this->getDoctrine()->getManager();
        $service = $doctrine->getRepository(Service::class)->find($id);
>>>>>>> Stashed changes
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {
<<<<<<< Updated upstream
            $image = $form->get('image')->getData();
            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
            $service->setImage($fichier);
    
            $em = $this->getDoctrine()->getManager();
=======

            
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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
=======
    public function showSevice(ServiceRepository $serviceRepository): Response
    {
        $service= $serviceRepository->findAll();
        
        return $this->render('service/serviceList.html.twig',array ('tableauServiceFront'=> $service));

    }


    #[Route('/serviceDetails', name: 'app_serviceDetails')]
    public function serviceDetails(ServiceRepository $serviceRepository): Response
    {
        $service= $serviceRepository->findAll();
        
        return $this->render('service/serviceDetails.html.twig',array ('tableauServiceDetails'=> $service));

>>>>>>> Stashed changes
    }
}
