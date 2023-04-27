<?php

namespace App\Controller;
use App\Entity\SousMetier;
use App\Entity\Metier;
use App\Form\MetierType;
use App\Repository\MetierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SousMetierRepository;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
#[Route('/metier')]
class MetierController extends AbstractController
{
    #[Route('/', name: 'app_metier_index', methods: ['GET', 'POST'])]
    public function index(MetierRepository $metierRepository,Request $request): Response
    {
        $metier = new Metier();

        /////////////////////////////////////////////     Trie et Recherche        ////////////////////////////
      
        $back = null;
            
    if($request->isMethod("POST")){
        if ( $request->request->get('optionsRadios')){
            $SortKey = $request->request->get('optionsRadios');
            switch ($SortKey){
                case 'id':
                    $metier = $metierRepository->SortByid();
                    break;

                case 'nom':
                    $metier = $metierRepository->SortBynomBlock();
                    break;

                case 'type':
                    $metier = $metierRepository->SortBynomPatient();
                    break;

                case 'freelancer':
                    $metier = $metierRepository->SortBynomMedecin();
                    break;


            }
        }
        else
        {
            $type = $request->request->get('optionsearch');
            $value = $request->request->get('Search');
            switch ($type){
                case 'id':
                    $metier = $metierRepository->findByid($value);
                    break;

                case 'nom':
                    $metier = $metierRepository->findBynomBlock($value);
                    break;

                case 'type':
                    $metier= $metierRepository->findBynomPatient($value);
                    break;
                case 'freelancer':
                    $metier = $metierRepository->findBynomMedecin($value);
                    break;



            }
        }

        if ( $metier){
            $back = "success";
        }else{
            $back = "failure";
        }
    } 
        return $this->render('metier/index.html.twig', [
            'metiers' => $metierRepository->findAll(),
            'metiers'=> $metier,
        ]);
    }
    #[Route('/affichage', name: 'app_affichage_metier')]
    public function affichage_metier(MetierRepository $metierRepository,Request $request,SluggerInterface $slugger): Response
    {

        $metier = new metier();
        $form = $this->createForm(MetierType::class, $metier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $photo = $form->get('imge')->getData();
        
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
                        $this->getParameter('metier_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
        
                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $metier->setImage($newFilename);
            }
        
                    $metierRepository->save($metier, true);
        
                    return $this->redirectToRoute('app_affichage_metier');
                }


                return $this->render('metier/index.html.twig', [
                    'metiers' => $metierRepository->findAll(),
                ]);
        
            }


    #[Route('/new', name: 'app_metier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MetierRepository $metierRepository): Response
    {
        $metier = new Metier();
        $form = $this->createForm(MetierType::class, $metier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $metierRepository->save($metier, true);

            return $this->redirectToRoute('app_metier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('metier/new.html.twig', [
            'metier' => $metier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_metier_show', methods: ['GET'])]
    public function show(Metier $metier): Response
    {
        return $this->render('metier/show.html.twig', [
            'metier' => $metier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_metier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Metier $metier, MetierRepository $metierRepository): Response
    {
        $form = $this->createForm(MetierType::class, $metier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $metierRepository->save($metier, true);

            return $this->redirectToRoute('app_metier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('metier/edit.html.twig', [
            'metier' => $metier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_metier_delete', methods: ['POST'])]
    public function delete(Request $request, Metier $metier, MetierRepository $metierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$metier->getId(), $request->request->get('_token'))) {
            $metierRepository->remove($metier, true);
        }

        return $this->redirectToRoute('app_metier_index', [], Response::HTTP_SEE_OTHER);
    }
    



/////////////////////////////////front /////////////////////////////////////
#[Route('/metier/front', name: 'app_front')]
public function Front(MetierRepository $metierRepository): Response
{
    return $this->render('metier/front.html.twig', [
        'metiers' => $metierRepository->findAll(),
    ]);
  
}


#[Route('/front/sous_metier/front', name: 'app_front_metierr', methods: ['GET'])]
public function SousMetier(SousMetierRepository $sousMetierRepository): Response
{
    return $this->render('metier/front_sous.html.twig', [
        'sous_metiers' => $sousMetierRepository->findAll(),
       
    ]);
  
}

#[Route('/metier/affichagefront', name: 'app_affichage_metier_front')]
public function affichage_front(SessionInterface $session,MetierRepository $metierRepository,Request $request,SluggerInterface $slugger): Response
{
    
    {$u = $session->get('my_key');

    $metier = new metier();
    $form = $this->createForm(MetierType::class, $metier);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $photo = $form->get('imge')->getData();
    
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
                    $this->getParameter('metier_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
    
            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            $metier->setImage($newFilename);
        }
    
                $metierRepository->save($metier, true);
    
                return $this->redirectToRoute('app_affichage_metier_front');
            }


            return $this->render('metier/front.html.twig', [
                'metiers' => $metierRepository->findAll(),
            ]);
    
        }

}
#[Route('map/show_in_map/{id}', name: 'app_local_map', methods: ['GET'])]
public function Map( Metier $id,EntityManagerInterface $entityManager ): Response
{

    $metier = $entityManager
        ->getRepository(Metier::class)->findBy( 
            ['id'=>$id ]
        );
    return $this->render('metier/map_arcgis.html.twig', [
        'metiers' => $metier,
    ]);
}
}
