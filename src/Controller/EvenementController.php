<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\String\Slugger\SluggerInterface;

use Knp\Component\Pager\PaginatorInterface;

use Dompdf\Options;
use Dompdf\Dompdf;
use phpDocumentor\Reflection\PseudoTypes\False_;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class EvenementController extends AbstractController
{
    private $evenementRepository;

    public function __construct(
        EvenementRepository $evenementRepository,
        
    )
    {
        $this->evenementRepository = $evenementRepository;
    }



    #[Route('/evenement', name: 'app_evenement')]
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    #[Route('/evenementAffichage', name: 'app_evenementAffichage')]
    public function affichage(EvenementRepository $evenementRepository,Request $request)
    {
        $evenement= $evenementRepository->findAll();
    
        return $this->render('evenement/index.html.twig',array ('tableauEvenement'=> $evenement));

        $this->addFlash('Success','Evenement ajoute avec succes!');
    }



    #[Route('/evenementAffichageFront', name: 'app_evenementAffichageFront' )]
    public function affichageFront(EvenementRepository $evenementRepository,Request $request)
    {
        $evenement= $evenementRepository->findAll();
        //return $this->render('evenement/index.html.twig',array ('tableauEvenement'=> $evenement));
        return $this->render('evenement/test.html.twig',array ('tableauEvenement'=> $evenement));

        $this->addFlash('Success','Evenement ajoute avec succes!');
    }





    #[Route('/evenementAdd', name: 'app_addevenement')]
    public function addEvenement(Request $request , ManagerRegistry$doctrine, SluggerInterface $slugger):Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {

            $photo = $form->get('imageev')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photo->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $photo->move(
                        $this->getParameter('evenement_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $evenement->setImageev($newFilename);
            }

            /*
            $imageev= $form->get('imageev')->getData();
            $fichier = md5(uniqid()) . '.' . $imageev->guessExtension();
            $imageev ->move(
                $this->getParameter('images_directory'),
            );
            $evenement->setImageev($fichier);*/

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
    public function editEvenement(Request $request, Evenement $evenement,$id, ManagerRegistry $doctrine, SluggerInterface $slugger):Response
    {
       
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
        
        if ($form-> isSubmitted() && $form->isValid()) 
        {


            $photo = $form->get('imageev')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photo->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $photo->move(
                        $this->getParameter('evenement_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $evenement->setImageev($newFilename);
            }

            /*
            $imageev= $form->get('imageev')->getData();
            $fichier = md5(uniqid()) . '.' . $imageev->guessExtension();
            $imageev ->move(
                $this->getParameter('images_directory'),
            );
            $evenement->setImageev($fichier);*/





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







    /**
     * @Route("/trierevenementtitreev", name="app_triertitreev_evenement")
     */
    public function triertitreev(EvenementRepository $evenementRepository): Response
    {
        $Evenement = $evenementRepository->triertitreev();
        return $this->render('Evenement/test.html.twig', [
            'tableauEvenement' => $Evenement,
        ]);
    }
    /**
     * @Route("/trierevenementtypeev", name="app_triertypeev_evenement")
     */
    public function triertypeev(EvenementRepository $evenementRepository): Response
    {
        $Evenement = $evenementRepository->triertypeev();
        return $this->render('Evenement/test.html.twig', [
            'tableauEvenement' => $Evenement,
        ]);
    }
    /**
     * @Route("/trierevenementdateev", name="app_trierdateev_evenement")
     */
    public function trierdateev(EvenementRepository $evenementRepository): Response
    {
        $Evenement = $evenementRepository->trierdateev();
        return $this->render('Evenement/test.html.twig', [
            'tableauEvenement' => $Evenement,
        ]);
    }


    #[Route('/searchevenement', name: 'app_evenement_search')]
    public function searchOffre( Request $request, EntityManagerInterface $entityManager): Response {
        $evenement=   $request->get('titreev');
     
        
        if($evenement == "") {
            $evenement = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();

        }else{
            $evenement = $entityManager
            ->getRepository(Evenement::class)->findBy(
                ['titreev'=> $evenement]
            );
        }
    return $this->render('evenement/test.html.twig', [
            'tableauEvenement' => $evenement, 
        ]);
    
    }





    #[Route('/stat', name: 'app_stat')]
    public function stat(EvenementRepository $evenementRepository){


        $evenements = $evenementRepository->findAll();

        $titreev = [];
        $color = [];
        $evcount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($evenements as $evenement){
            $titreev[] = $evenement->getTitreev();
            $color[] = $evenement->getColor();
            $evcount[] = count($evenement->getParticipationns());
        }

        
        return $this->render('evenement/stat.html.twig', [
            'titreev' => json_encode($titreev),
            'color' => json_encode($color),
            'evcount' => json_encode($evcount),
        ]);
    }



















    
    
  

    #[Route('/get',name:"app_api_getallevenement",methods:'GET')]
    public function getevenement(EvenementRepository $evenementRepository)
    {
        $evenement=$evenementRepository->findAll();
        $response=$this->json($evenement,200,[],['groups'=>'evenement:read']);
        return $response;
    }






    /*#[Route('/frontjson', name: 'event_list_json')]
    public function ListEventsjson(EvenementRepository $repository,SerializerInterface $SerializerInterface ): Response
    {
        $evenement=$repository->findAll();
        $json = $SerializerInterface->serialize($evenement, 'json', ['groups' => 'evenement']);

        return new JsonResponse($json, 200, [], true);
    }*/





   






    #[Route('/create', name: 'app_addevenementjson')]
    public function addEvenementjson(Request $request)
    {
        $evenement = new Evenement();
        $titreev=$request->query->get("titreev");
        $descriptionev=$request->query->get("descriptionev");
        $dateev=$request->query->get("dateev");
        $typeev=$request->query->get("typeev");
        $em = $this->getDoctrine()->getManager();

        $evenement->setTitreev($titreev);
        $evenement->setDescriptionev($descriptionev);
        $evenement->setDateev(new \DateTime($dateev));
        $evenement->settypeev($typeev);

        $em->persist($evenement);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($evenement);
        return new JsonResponse($formatted); 
}



#[Route('/deleteEvenementjson', name: 'app_delete_evenement_json')]
    public function deleteEvenementJSON(Request $request)
    {
        $id = $request->get("id");
       
        $entityManager = $this->getDoctrine()->getManager();
        $evenement = $this->evenementRepository->find($id);
        if($evenement!=null){
            $entityManager->remove($evenement);
            $entityManager->flush();
    
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("Evenement a ete supprime avec success.");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id evenement invalid!");
        

    }


    #[Route('/modifieEvenementJson', name: 'app_modifier_evenement_json')]
    public function modifieUserJSON(Request $request)
    {
        $id = $request->get("id");
       
        $entityManager = $this->getDoctrine()->getManager();
        $evenement = $this->evenementRepository->find($id);
        if($evenement!=null){

            $titreev = $request->query->get("titreev");
            $descriptionev = $request->query->get("descriptionev");
            $dateev = $request->query->get("dateev");
            //$password = $request->query->get("password");
            $typeev = $request->query->get("typeev");
    
            //$password_hashed = $this->passwordEncoder->encodePassword($user,$request->query->get("password"));
            $evenement->setTitreev($titreev);
            $evenement->setDescriptionev($descriptionev);
            $evenement->setDateev($dateev);
            $evenement->setTypeev($typeev);
            //$user->setPassword($password);
           
            $entityManager->persist($evenement);
            $entityManager->flush();
    
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("evenement a ete modifie avec success.");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id evenement invalid!");

    }








//PDF
    #[Route('/evenementdownload', name: 'app_evenement_download')]
    public function indexdownload(EvenementRepository $evenementRepository)
    {
        
        $evenement= $evenementRepository->findAll();
        return $this->render('evenement/data.html.twig',array ('tableauEvenement'=> $evenement));
    }


    #[Route('/evenement/data/download', name: 'app_evenement_data_download')]
    public function indexdownloaddata(EvenementRepository $evenementRepository)

    {
        /*$evenement= $evenementRepository->findAll();*/
       /* return */
        $pdfOptions =new Options();
        //police
        $pdfOptions->set('defaultFont','Arial');

        $pdfOptions->setIsRemoteEnabled(true);

        $dompdf = new Dompdf($pdfOptions);

        $tableauEvenement= $evenementRepository->findAll();

        $context = stream_context_create([
            'ssl' =>[
                'verify_peer' =>FALSE,
                'verify_peer_name'=> False,
                'allow_self_signed' =>TRUE
            ]
            ]);
            $dompdf ->setHttpContext($context);

            $html = $this->renderView('evenement/download.html.twig', 
            ['tableauEvenement'=> $tableauEvenement]);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4','portrait');
            $dompdf->render();

            $fichier= 'evenement-data-.pdf';

            $dompdf->stream($fichier,[
                'Attachement' => TRUE
            ]);

            return new Response();
           //return  $this->render('evenement/download.html.twig',['evenement'=> $evenement], new Response());
        
       
    }
    


    



    













    //calendar
    #[Route('/calendar', name: 'app_calendar')]
    public function indexcalendar(): Response
    {
        return $this->render('evenement/indexcalendarmain.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
    
}
