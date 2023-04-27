<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\Repository\AnnonceRepository;
use App\Repository\ClassificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Doctrine\ORM\QueryBuilder;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\EntityManagerInterface;
#[Route('/annonce')]
class AnnonceController extends AbstractController
{
  
    #[Route('/', name: 'app_annonce_index', methods: ['GET', 'POST'])]
    public function index(Request $request, AnnonceRepository $annonceRepository, PaginatorInterface $paginator): Response
    {
        $back = null;
        $type = $request->request->get('optionsearch');
        $value = $request->request->get('Search');
        $SortKey = $request->request->get('optionsRadios');
        
        if($SortKey){
            switch ($SortKey){
                case 'id':
                    $annonces = $annonceRepository->SortByid();
                    break;
    
                case 'titre':
                    $annonces = $annonceRepository->SortBytitre();
                    break;
    
                default:
                    $annonces = $annonceRepository->findAll();
            }
        } 
        else if($type && $value){
            switch ($type){
                case 'id':
                    $annonces = $annonceRepository->findByid($value);
                    break;
    
                case 'titre':
                    $annonces = $annonceRepository->findBytitre($value);
                    break;
    
                default:
                    $annonces = $annonceRepository->findAll();
            }
        }
        else{
            $annonces = $annonceRepository->findAll();
        }
    
        if (count($annonces)){
            $back = "success";
        }else{
            $back = "failure";
        }
    
        $annonces = $paginator->paginate(
            $annonces, /* query NOT result */
            $request->query->getInt('page', 1),
            2
        );
    
        return $this->render('FrontOffice/annonce/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }
    
    

    #[Route('/new', name: 'app_annonce_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnnonceRepository $annonceRepository): Response
    {
        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $annonceRepository->save($annonce, true);

            return $this->redirectToRoute('app_annonce_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('FrontOffice/annonce/new.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_annonce_show', methods: ['GET'])]
    public function show(Annonce $annonce): Response
    {
        return $this->render('FrontOffice/annonce/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }


  
    #[Route('/{id}/edit', name: 'app_annonce_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Annonce $annonce, AnnonceRepository $annonceRepository): Response
    {
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $annonceRepository->save($annonce, true);

            return $this->redirectToRoute('app_annonce_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('FrontOffice/annonce/edit.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_annonce_delete', methods: ['POST'])]
    public function delete(Request $request, Annonce $annonce, AnnonceRepository $annonceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$annonce->getId(), $request->request->get('_token'))) {
            $annonceRepository->remove($annonce, true);
        }

        return $this->redirectToRoute('app_annonce_index', [], Response::HTTP_SEE_OTHER);
    }
   
    #[Route('/annonce/search', name: 'annonce_search')]  
    public function searchAnnonces(Request $request, AnnonceRepository $annonceRepository): Response
    {
        $searchTerm = $request->query->get('q');
        $annonces = $annonceRepository->findByTitre($searchTerm);
        
        return $this->render('FrontOffice/annonce/search.html.twig', [
            'annonces' => $annonces,
            'searchTerm' => $searchTerm,
        ]);
    }
    


    
    #[Route('/annonce/export/all', name: 'export_all_pdf')]
    public function exportAllPdfAction()
    {
        // Récupérer toutes les annonces
        $annonces = $this->getDoctrine()->getRepository(Annonce::class)->findAll();
    
        // Créer le contenu HTML du PDF personnalisé
        $html = '<div style="text-align:center; color: #1B7F7A;"><h1>Liste des annonces</h1></div><br/>';
        foreach ($annonces as $annonce) {
            $html .= '<h2 style="color:#4CABA6; text-decoration:underline;">'.$annonce->getTitre().'</h2>';
            $html .= '<p><strong>Date:</strong> '.$annonce->getDate()->format('Y-m-d').'</p>';
            $html .= '<p><strong>Classification:</strong> '.$annonce->getClassification()->getNom().'</p>';
            $html .= '<br />';
        }
    
        // Créer l'objet Dompdf et générer le PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // Renvoyer le PDF en réponse HTTP
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment;filename="annonces.pdf"');
        return $response;
    }
    

#[Route('/rechercheadmin', name: 'app_liste_ordonne')]
    public function listOrdonne(Request $request, AnnonceRepository $repo): Response
    {
        $titre = $request->query->get('titre');
        $list = $repo->findByTitree($titre);
        return $this->render('FrontOffice/annonce/index.html.twig', [
            'annonces' => $list,
        ]);
    }
//#[Route('/annonces/page/{page}', name: 'app_annonce_list_paginated', requirements: ['page' => '\d+'])]
//public function listPaginated(Request $request, AnnonceRepository $annonceRepository, int $page = 1)
//{
    // Nombre d'éléments à afficher par page
   // $limit = 10;

    // Calculer le nombre total d'éléments dans la base de données
    //$total = $annonceRepository->count([]);

    // Calculer le nombre total de pages
    //$pages = ceil($total / $limit);

    // Calculer l'offset pour la requête SQL
   // $offset = ($page - 1) * $limit;

    // Récupérer les annonces paginées
  //  $annonces = $annonceRepository->findBy([], ['date' => 'DESC'], $limit, $offset);

    // Afficher le template
  //  return $this->render('FrontOffice/annonce/list_paginated.html.twig', [
  //      'annonces' => $annonces,
       // 'pages' => $pages,
      //  'current_page' => $page,
   // ]);
//}



}



