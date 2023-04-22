<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\Repository\AnnonceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;

use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
#[Route('/annonce')]
class AnnonceController extends AbstractController
{
  
    #[Route('/', name: 'app_annonce_index', methods: ['GET'])]
    public function index(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('FrontOffice/annonce/index.html.twig', [
            'annonces' => $annonceRepository->findAll(),
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
    #[Route('/tripardate', name: 'app_annonce_tri')]
    public function tri(AnnonceRepository $annonceRepository): Response
    {
        $annonce = $annonceRepository->findAllSortedByDate();
        return $this->render('FrontOffice/annonce/tri.html.twig', [
            'annonces' => $annonce,
        ]);
        
    }
   
    #[Route('/rechercher', name: 'app_annonce_search', methods: ['GET'])]
    public function search(Request $request)
{
    $nom = $request->query->get('nom');
    $annonces = $this->getDoctrine()->getRepository(Annonce::class)->findBy(['nom' => $nom]);

    return $this->render('annonce/index.html.twig', [
        'annonces' => $annonces,
    ]);
}
#[Route('/annonce/export/all', name: 'export_all_pdf')]
public function exportAllPdfAction()
{
       // Récupérer toutes les annonces
       $annonces = $this->getDoctrine()->getRepository(Annonce::class)->findAll();

       // Créer le contenu HTML du PDF personnalisé
       $html = '';
       foreach ($annonces as $annonce) {
           $html .= '<h1>'.$annonce->getTitre().'</h1>';
           $html .= '<p>Date: '.$annonce->getDate()->format('Y-m-d').'</p>';
           $html .= '<p>Classification: '.$annonce->getClassification()->getNom().'</p>';
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


#[Route('/annonces/page/{page}', name: 'app_annonce_list_paginated', requirements: ['page' => '\d+'])]
public function listPaginated(Request $request, AnnonceRepository $annonceRepository, int $page = 1)
{
    // Nombre d'éléments à afficher par page
    $limit = 10;

    // Calculer le nombre total d'éléments dans la base de données
    $total = $annonceRepository->count([]);

    // Calculer le nombre total de pages
    $pages = ceil($total / $limit);

    // Calculer l'offset pour la requête SQL
    $offset = ($page - 1) * $limit;

    // Récupérer les annonces paginées
    $annonces = $annonceRepository->findBy([], ['date' => 'DESC'], $limit, $offset);

    // Afficher le template
    return $this->render('FrontOffice/annonce/list_paginated.html.twig', [
        'annonces' => $annonces,
        'pages' => $pages,
        'current_page' => $page,
    ]);
}



}