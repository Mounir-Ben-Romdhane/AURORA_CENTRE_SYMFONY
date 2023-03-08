<?php
namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Reclamation;
use App\Form\ReclamationbackType;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Service\NotificationService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Dompdf\Dompdf;

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
        $reclamation->setStatus(0);
        $currentDateTime = new \DateTime();
        $currentDateTime->format('Y-m-d H:i:s');
        $reclamation->setDateReclamation($currentDateTime);

        $user = $this->security->getUser();
        if(!$user){
            $reclamation->setEmailConnecte("");     
        }else{
            $useridentifier=$this->security->getUser()->getUserIdentifier();
            $reclamation->setEmailConnecte($useridentifier);
        }
        

        $em=$doctrine->getManager();
        $form->handleRequest($request);
        $description = $form->get('description')->getData();
        $badWords = ['shit','fuck', 'Fuck off', 'piss off','bugger off','Bloody hell','Bastard','Bollocks','Motherfucker','Son of a bitch','Asshole','ass'];
        $cleanDescription = str_ireplace($badWords, '****', $description);
        $reclamation->setDescription($cleanDescription);
        if($form->isSubmitted() && $form->isValid())
        {
            
            $em->persist($reclamation);
            
            $em->flush();
            $this->flashBag->add('success', 'Form submited successfully');
            return $this->redirectToRoute('affiche_reclamation_byemail'); 
           
            
            
        }

        return $this->render('reclamation/add.html.twig', [
            'controller_name' => 'ReclamationController',
            'form'=>$form->createView(),
        ]);
    }
    #[Route('/AccepterReclamation/{id}', name: 'app_accepter_reclamation')]
    public function AccepterReclamation($id,ReclamationRepository $reclamationRepository,ManagerRegistry $doctrine)
    {
        $reclamation = $reclamationRepository->find($id);
        $email=$reclamation->getEmailConnecte();
        $reclamation->setStatus(1);
        $em = $doctrine->getManager();
        $em->persist($reclamation);
        $em->flush();
        return $this->redirectToRoute('afficheback_reclamation');
    }

    #[Route('/RefuseReclamation/{id}', name: 'app_refuser_reclamation')]
    public function RefuserReclamation($id,ReclamationRepository $reclamationRepository,ManagerRegistry $doctrine)
    {
        $reclamation =$reclamationRepository->find($id);
        $email=$reclamation->getEmailConnecte();
        $reclamation->setStatus(2);
        $em = $doctrine->getManager();
        $em->persist($reclamation);
        $em->flush();
        return $this->redirectToRoute('afficheback_reclamation');
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
            return $this->redirectToRoute('affiche_reclamation_byemail');    

        } 
    }

    #[Route('/reclamation/deleteback/{id}', name:"deleteback_reclamation")]
    public function deleteback(ManagerRegistry $doctrine,Request $request,$id)
    {
        $em=$doctrine->getManager();
        $reclamation=$doctrine->getRepository(Reclamation::class)->find($id);
        if(!$reclamation){
            return new Response("claim not found "); 
        }else{
            $em->remove($reclamation);
            $em->flush();
            $this->flashBag->add('success', 'claim deleted successfully');
            return $this->redirectToRoute('afficheback_reclamation');    

        } 
    }
    
    #[Route('/reclamation/affiche',name:"affiche_reclamation")]
    public function affiche(ManagerRegistry $doctrine,Request $request,ReclamationRepository $reclamationRepository)
    {
       
        $orderBy = $request->request->get('orderBy');
        $iconClass = $request->query->get('iconClass');

    
       
            return new Response("no claim found");
        
            return $this->render("reclamation/affiche.html.twig"
                
                
        );
        
    }

    #[Route('/reclamation/orderbytype', name: 'reclamation_orderbytype', methods: ['GET'])]
public function orderByType(Request $request, ReclamationRepository $reclamationRepository): Response
{
    $useridentifier=$this->security->getUser()->getUserIdentifier();
    $reclamation = $reclamationRepository->orderByType($useridentifier);

    return $this->render('reclamation/affiche.html.twig', [
        'reclamations' => $reclamation,
    ]);
}
#[Route('/reclamation/orderbytypeDESC', name: 'reclamation_orderbytypeDESC', methods: ['GET'])]
public function orderByTypeDESC(Request $request, ReclamationRepository $reclamationRepository): Response
{
    $useridentifier=$this->security->getUser()->getUserIdentifier();
    $reclamation = $reclamationRepository->orderByTypeDESC($useridentifier);

    return $this->render('reclamation/affiche.html.twig', [
        'reclamations' => $reclamation,
    ]);
}

#[Route('/reclamation/orderbynom', name: 'reclamation_orderbynom', methods: ['GET'])]
public function orderByNom(Request $request, ReclamationRepository $reclamationRepository): Response
{
    $useridentifier=$this->security->getUser()->getUserIdentifier();
    $reclamation = $reclamationRepository->orderByNom($useridentifier);

    return $this->render('reclamation/affiche.html.twig', [
        'reclamations' => $reclamation,
    ]);
}
#[Route('/reclamation/orderbynomDESC', name: 'reclamation_orderbynomDESC', methods: ['GET'])]
public function orderByNomDESC(Request $request, ReclamationRepository $reclamationRepository): Response
{$useridentifier=$this->security->getUser()->getUserIdentifier();
    $reclamation = $reclamationRepository->orderByNomDESC($useridentifier);

    return $this->render('reclamation/affiche.html.twig', [
        'reclamations' => $reclamation,
    ]);
}  
#[Route('/reclamation/orderbydate', name: 'reclamation_orderbydate', methods: ['GET'])]
public function orderByDate(Request $request, ReclamationRepository $reclamationRepository): Response
{$useridentifier=$this->security->getUser()->getUserIdentifier();
    $reclamation = $reclamationRepository->orderByDate($useridentifier);

    return $this->render('reclamation/affiche.html.twig', [
        'reclamations' => $reclamation,
    ]);
}
#[Route('/reclamation/orderbydateDESC', name: 'reclamation_orderbydateDESC', methods: ['GET'])]
public function orderByDateDESC(Request $request, ReclamationRepository $reclamationRepository): Response
{
    $useridentifier=$this->security->getUser()->getUserIdentifier();
    $reclamation = $reclamationRepository->orderByDateDESC($useridentifier);

    return $this->render('reclamation/affiche.html.twig', [
        'reclamations' => $reclamation,
    ]);
}
#[Route('reclamation/affichebyemail',name:"affiche_reclamation_byemail")]
    public function affichebyemail(ManagerRegistry $doctrine,ReclamationRepository $reclamationRepository)
    {$user = $this->security->getUser();
        if(!$user){
            return $this->render("baseFront.html.twig");
        }
        else{
            $useridentifier=$this->security->getUser()->getUserIdentifier();
        $reclamation=$reclamationRepository->getclaimbyemail($useridentifier);
        
        
            return $this->render("reclamation/affiche.html.twig",
            array('reclamations'=>$reclamation)

            );
        }
        
        
    }
    
    
    #[Route('/reclamation/afficheback',name:"afficheback_reclamation")]
    public function afficheback(Request $request,ManagerRegistry $doctrine,PaginatorInterface $paginator)
    {

        $reclamation=$doctrine->getRepository(Reclamation::class)->findAll();
        $query=$doctrine->getRepository(Reclamation::class)->findAll();

        if(!$reclamation){
            
        }else{
            $pagination = $paginator->paginate(
                $query, // query to paginate
                $request->query->getInt('page', 1), // current page number
                3  // number of items per page
            );
        
            return $this->render("reclamation/afficheback.html.twig",[
                'pagination' => $pagination,
                'reclamations'=>$reclamation,
            ]

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
            return $this->redirectToRoute('affiche_reclamation_byemail');

            
           }
        }
        return $this->render('reclamation/updatefront.html.twig',
            ['form'=>$form->createView(),
 
            ]);
    }

    #[Route('/reclamation/updateback/{id}',name:"updateback_reclamation")]
    public function updateback(ManagerRegistry $doctrine,$id,Request $request){
        $em=$doctrine->getManager();
        $reclamation=$doctrine->getRepository(Reclamation::class)->find($id);
        if(!$reclamation){
            return new Response("no claim found with this id");
        }else{
           $form=$this->createForm(ReclamationbackType::class,$reclamation);
           $form->handleRequest($request); 
           

           if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->flashBag->add('success', 'Form updated successfully');
            return $this->redirectToRoute('afficheback_reclamation');

            
           }
        }
        return $this->render('reclamation/update.html.twig',
            ['form'=>$form->createView(),
 
            ]);
    }

    
    #[Route('/api/getreclamation',name:"app_api_getallreclamation",methods:'GET')]
    public function getreclamation(ReclamationRepository $reclamationRepository)
    {
        $reclamation=$reclamationRepository->findAll();
        $response=$this->json($reclamation,200,[],['groups'=>'reclamation:read']);
        return $response;
    }
    #[Route('/api/addreclamation',name:"app_api_addreclamation",methods:'GET')]
    public function addreclamationapi(ValidatorInterface $validator,ReclamationRepository $reclamationRepository,Request $request,ManagerRegistry $doctrine,SerializerInterface $serializerInterface)
    {
        $reclamation=new Reclamation();
        $type=$request->query->get('type');
        $nom=$request->query->get('nom');
        $description=$request->query->get('description');
        $status=$request->query->get('status');
        $email=$request->query->get('email_reclamation');
        $email_c=$request->query->get('email_connecte');
        $date=new \DateTime('now');
        $em=$doctrine->getManager();
        $reclamation->setType($type);
        $reclamation->setDescription($description);
        $reclamation->setNom($nom);
        $reclamation->setStatus($status);
        $reclamation->setDateReclamation($date);
        $reclamation->setEmailConnecte($email_c);
        $reclamation->setEmailReclamation($email);
        $em->persist($reclamation);
        $em->flush();
        return $this->json($reclamation,200,[],['groups'=>'reclamation:read']);
        

    }
    
    #[Route('/api/deletereclamation/{id}',name:"app_api_deletereclamation",methods:'GET')]
    public function deletereclamationapi($id,ManagerRegistry $doctrine){
        $reclamation=$doctrine->getRepository(Reclamation::class)->find($id);
        if(!$reclamation){
            throw $this->createNotFoundException(sprintf('no claim found with that id'));
        }
        $em=$doctrine->getManager();
        $em->remove($reclamation);
        $em->flush();
        return $this->json($reclamation,200,[]);

    }
    #[Route('/api/updatereclamation/{id}',name:"app_api_updatereclamation",methods:'PUT')]
    public function updatereclamationapi(SerializerInterface $serializerInterface,$id,ManagerRegistry $doctrine, ValidatorInterface $validator,Request $request)
    {
        $jsonrecu = $request->getContent();
        $reclamation = $doctrine->getRepository(Reclamation::class)->find($id);
        
        if(!$reclamation){
            throw $this->createNotFoundException(sprintf('no claim found with that id'));
        }
        
        $deserializedReclamation = $serializerInterface->deserialize($jsonrecu, Reclamation::class, 'json');
        
        $reclamation->setType($deserializedReclamation->getType());
        $reclamation->setNom($deserializedReclamation->getNom());
        $reclamation->setDescription($deserializedReclamation->getDescription());
        $reclamation->setStatus($deserializedReclamation->getStatus());
        $reclamation->setDateReclamation($deserializedReclamation->getDateReclamation());
        
        $em = $doctrine->getManager();
        $em->persist($reclamation);
        $em->flush();
        
        return $this->json($reclamation, 201, [], ['groups' => 'reclamation:read']);
    }
    #[Route('/reclamationpdf/{id}', name: 'app_reclamationpdf')]
        public function pdfreser(ManagerRegistry $doctrine,$id): Response
        {
            $dompdf = new Dompdf();
            $reclamation = $doctrine->getRepository(Reclamation::class)->find($id);

            // Load some HTML content into the document
            $html=$this->render('reclamation/reclamationPDF.html.twig', [
                'reclamations' => $reclamation
            ]);
              
            // Load the HTML content into the Dompdf instance
            $dompdf->loadHtml($html);
    
            // Set the paper size and orientation (optional)
            $dompdf->setPaper('A3', 'landscape');
    
            // Render the HTML content as a PDF document
            $dompdf->render();
    
            // Output the PDF document to the browser for download
            $response = new Response($dompdf->output());
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-Disposition', 'attachment; filename="DonRapport.pdf"');
    
            return $response;

            return $this->render('reclamation/reclamationPDF.html.twig', [
                array('reclamations'=>$reclamation)
            ]);
        }
}