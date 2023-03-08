<?php

namespace App\Controller;
use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\SerializerInterface;

class ServiceController extends AbstractController
{
   
    
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

    
    
    #[Route('/serviceAffichageFront', name: 'app_serviceAffichageFront')]
    public function affichageFront(ServiceRepository $serviceRepository)
    {
        $service= $serviceRepository->findAll();
     

        return $this->render('service/serviceList.html.twig', ['tableauServiceFront'=> $service]);
    }


    #[Route('/serviceAdd', name: 'app_addservice')]
public function addService(Request $request, ManagerRegistry $doctrine,SluggerInterface $slugger): Response
{
    $service = new Service();
    $form = $this->createForm(ServiceType::class, $service);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
         /* $image = $form->get('image')->getData();
        $fichier = md5(uniqid()) . '.' . $image->guessExtension();
        $image->move(
            $this->getParameter('images_directory'),
            $fichier
        );
        $service->setImage($fichier);*/

        $photo = $form->get('image')->getData();

            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
              
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photo->guessExtension();
                try {
                    $photo->move(
                        $this->getParameter('user_directory'),
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


        
        $em = $doctrine->getManager();
        $em->persist($service);
        $em->flush();

        $this->addFlash(
            'Success',
            'Service ajouté avec succées !'
        );

        
        return $this->redirectToRoute('app_serviceAffichage');
    }

    return $this->render('service/add.html.twig', [
        "form" => $form->createView()
    ]);
}




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
    $this->addFlash(
        'Success',
        'Service supprimé avec succées !'
    );



    return $this->redirectToRoute("app_serviceAffichage");
}




    #[Route('/serviceUpdate/{id}', name: 'app_updateservice')]
    public function editService(Request $request,$id, ManagerRegistry $doctrine):Response
    {
        $em = $this->getDoctrine()->getManager();
        $service = $doctrine->getRepository(Service::class)->find($id);
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {

            
            $em->persist($service);
            $em->flush();
            $this->addFlash(
                'Success',
                'Service modifié avec succées !'
            );
            return $this->redirectToRoute('app_serviceAffichage');

        }

       return $this->render('service/update.html.twig',[
        "form" => $form->createView()
       ]
    );
    }


#[Route('/serviceShow', name: 'app_serviceShow')]
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

    }





    //FOR CODENAME ONE

    #[Route('/api/getService',name:"app_api_getService",methods:'GET')]
    public function getService(ServiceRepository $serviceRepository)
    {
        $service=$serviceRepository->findAll();
        $response=$this->json($service,200,[],['groups'=>'service:read']);
        return $response;
    }


    //http://127.0.0.1:8000/api/addServiceApi/?titreS=%22XXXX%22&descriptionS=%22XXXX%22&typeS=%22Coaching%22&dateS=%222023-04-19%2013:00:00%22
    #[Route('/api/addServiceApi',name:"app_api_addService",methods:'GET')]
    public function addServiceApi(ValidatorInterface $validator,ServiceRepository $serviceRepository,Request $request,ManagerRegistry $doctrine,SerializerInterface $serializerInterface)
    {
        $service=new Service();
        $titreS=$request->query->get('titreS');
        $descriptionS=$request->query->get('descriptionS');
        $typeS=$request->query->get('typeS');
        $dateS=new \DateTime('now');

        $em=$doctrine->getManager();

        $service->setTypeS($typeS);
        $service->setDescriptionS($descriptionS);
        $service->setTitreS($titreS);
        $service->setDateS($dateS);


        $em->persist($service);
        $em->flush();
        return $this->json($service,200,[],['groups'=>'service:read']);
            }

            
    #[Route('/api/deleteService/{id}',name:"app_api_updateService",methods:'DELETE')]
    public function deleteServiceApi($id,ManagerRegistry $doctrine){
        $service=$doctrine->getRepository(Service::class)->find($id);
        if(!$service){
            throw $this->createNotFoundException(sprintf('no claim found with that id'));
        }
        $em=$doctrine->getManager();
        $em->remove($service);
        $em->flush();
        return new JsonResponse(null,Response::HTTP_NO_CONTENT);

    }

    #[Route('/api/updateService',name:"app_api_updateService",methods:'GET')]
    public function updateServiceApi(SerializerInterface $serializerInterface,$id,ManagerRegistry $doctrine, ValidatorInterface $validator,Request $request)
    {
        $jsonrecu = $request->getContent();
        $service = $doctrine->getRepository(Service::class)->find($id);
        
        if(!$service){
            throw $this->createNotFoundException(sprintf('no claim found with that id'));
        }
        
        $deserializedService = $serializerInterface->deserialize($jsonrecu, Service::class, 'json');
        
        $service->setTitreS($deserializedService->getTitreS());
        $service->setDescriptionS($deserializedService->getDescriptionS());
        $service->setTypeS($deserializedService->getTypeS());
        $service->setDateS($deserializedService->getDateS());
        
        $em = $doctrine->getManager();
        $em->persist($service);
        $em->flush();
        
        return $this->json($service, 201, [], ['groups' => 'service:read']);
    }

    #[Route('/serviceTrier', name: 'app_trierservice')]
    public function trierService(ServiceRepository $serviceRepository)
    {
        $service=$serviceRepository->trierService();
        return $this->render('service/affichage.html.twig',[
            "tableauService"=>$service
        ]);
    }

    #[Route('/serviceTrier2', name: 'app_trierservice2')]
    public function trierService2(ServiceRepository $serviceRepository)
    {
        $service=$serviceRepository->trierService();
        return $this->render('service/affichage.html.twig',[
            "tableauService"=>$service
        ]);
    }
   
}
