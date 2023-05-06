<?php

namespace App\Controller;

use App\Entity\Classification;
use App\Form\ClassificationType;
use App\Repository\ClassificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/classification')]
class ClassificationController extends AbstractController
{
    #[Route('/', name: 'app_classification_index', methods: ['GET'])]
    public function index(ClassificationRepository $classificationRepository): Response
    {
        return $this->render('FrontOffice/classification/index.html.twig', [
            'classifications' => $classificationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_classification_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ClassificationRepository $classificationRepository): Response
    {
        $classification = new Classification();
        $form = $this->createForm(ClassificationType::class, $classification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $classificationRepository->save($classification, true);

            return $this->redirectToRoute('app_classification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('FrontOffice/classification/new.html.twig', [
            'classification' => $classification,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_classification_show', methods: ['GET'])]
    public function show(Classification $classification): Response
    {
        return $this->render('FrontOffice/classification/show.html.twig', [
            'classification' => $classification,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_classification_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Classification $classification, ClassificationRepository $classificationRepository): Response
    {
        $form = $this->createForm(ClassificationType::class, $classification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $classificationRepository->save($classification, true);

            return $this->redirectToRoute('app_classification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('FrontOffice/classification/edit.html.twig', [
            'classification' => $classification,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_classification_delete', methods: ['POST'])]
    public function delete(Request $request, Classification $classification, ClassificationRepository $classificationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$classification->getId(), $request->request->get('_token'))) {
            $classificationRepository->remove($classification, true);
        }

        return $this->redirectToRoute('app_classification_index', [], Response::HTTP_SEE_OTHER);
    }
}
