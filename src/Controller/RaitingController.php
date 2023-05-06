<?php

namespace App\Controller;

use App\Entity\Raiting;
use App\Form\RaitingType;
use App\Repository\RaitingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/raiting')]
class RaitingController extends AbstractController
{
    #[Route('/', name: 'app_raiting_index', methods: ['GET'])]
    public function index(RaitingRepository $raitingRepository): Response
    {
        return $this->render('raiting/index.html.twig', [
            'raitings' => $raitingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_raiting_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RaitingRepository $raitingRepository): Response
    {
        $raiting = new Raiting();
        $form = $this->createForm(RaitingType::class, $raiting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $raitingRepository->save($raiting, true);

            return $this->redirectToRoute('app_raiting_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('raiting/new.html.twig', [
            'raiting' => $raiting,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_raiting_show', methods: ['GET'])]
    public function show(Raiting $raiting): Response
    {
        return $this->render('raiting/show.html.twig', [
            'raiting' => $raiting,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_raiting_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Raiting $raiting, RaitingRepository $raitingRepository): Response
    {
        $form = $this->createForm(RaitingType::class, $raiting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $raitingRepository->save($raiting, true);

            return $this->redirectToRoute('app_raiting_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('raiting/edit.html.twig', [
            'raiting' => $raiting,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_raiting_delete', methods: ['POST'])]
    public function delete(Request $request, Raiting $raiting, RaitingRepository $raitingRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$raiting->getId(), $request->request->get('_token'))) {
            $raitingRepository->remove($raiting, true);
        }

        return $this->redirectToRoute('app_raiting_index', [], Response::HTTP_SEE_OTHER);
    }






    #[Route('/{id}/rate', name:'Rate')]
    public function addRaiting(Request $request)
{
    $raiting = new Raiting();
    $form = $this->createForm(RatingType::class, $raiting);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $note = $form->get('id')->getData();
        // Faire quelque chose avec la note saisie
    }

    // Afficher le formulaire
    return $this->render('FrontOffice/raiting/showfront.html.twig', [
        'form' => $form->createView(),
    ]);
}










}
