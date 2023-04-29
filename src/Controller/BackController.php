<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\Repository\AnnonceRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

#[Route('/back')]
class BackController extends AbstractController
{
    #[Route('/', name: 'app_back_index', methods: ['GET'])]
    public function index(Request $request, AnnonceRepository $annonceRepository, PaginatorInterface $paginator): Response
    {

        $annonces = $annonceRepository->findAll();
        $annonces = $paginator->paginate(
            $annonces, /* query NOT result */
            $request->query->getInt('page', 1),
            4
        );
        return $this->render('BackOffice/back/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }


    #[Route('/{id}', name: 'app_back_show', methods: ['GET'])]
    public function show(Annonce $annonce): Response
    {
        return $this->render('BackOffice/back/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }

    #[Route('/{id}', name: 'app_back_delete', methods: ['POST'])]
    public function delete(Request $request, Annonce $annonce, AnnonceRepository $annonceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$annonce->getId(), $request->request->get('_token'))) {
            $annonceRepository->remove($annonce, true);
        }

        return $this->redirectToRoute('app_back_index', [], Response::HTTP_SEE_OTHER);
    }

}
