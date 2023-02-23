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
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

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
     

        //return $this->render('baseBack.html.twig',array ('tableauEvenement'=> $evenement));
        return $this->render('evenement/index.html.twig',array ('tableauEvenement'=> $evenement));

        $this->addFlash('Success','Evenement ajoute avec succes!');
    }



    #[Route('/evenementAffichageFront', name: 'app_evenementAffichageFront')]
    public function affichageFront(EvenementRepository $evenementRepository)
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


    
}
