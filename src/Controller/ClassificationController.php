<?php

namespace App\Controller;

use App\Entity\Classification;
use App\Form\ClassificationType;
use App\Repository\ClassificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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


    #[Route("/Allclassifications")]
    public function getclassifications(ClassificationRepository $repo, NormalizerInterface $normalizer):JsonResponse
    {
        $classifications = $repo->findAll();

        $json = $normalizer->normalize($classifications, 'json', ['groups' => "classifications"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new JsonResponse($json);
    }




    #[Route("/classification1/{id}")]
    public function classificationId($id, NormalizerInterface $normalizer, ClassificationRepository $repo):JsonResponse
    {
        $classification = $repo->find($id);
        $annonceNormalises = $normalizer->normalize($classification, 'json', ['groups' => "classifications"]);
        return new JsonResponse($annonceNormalises);
    }


    #[Route("/addclassificationJSON/new", name: "addclassificationJSON")]
    public function addclassificationJSON(Request $req,   NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $classification = new classification();
        $classification->setNom($req->get('nom'));
        $classification->setDomaine($req->get('domaine'));
    
        $em->persist($classification);
        $em->flush();

        $jsonContent = $Normalizer->normalize($classification, 'json', ['groups' => 'classifications']);
        return new Response(json_encode($jsonContent));
    }

     //https://127.0.0.1:8000/addclassificationJSON/new?nom=marketing&domaine=business

    #[Route("/updateclassificationJSON/{id}", name: "updateclassificationJSON")]
    public function updateclassificationJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $classification = $em->getRepository(classification::class)->find($id);
        $classification->setNom($req->get('nom'));
        $classification->setDomaine($req->get('domaine'));
    

        $em->flush();

        $jsonContent = $Normalizer->normalize($classification, 'json', ['groups' => 'classifications']);
        return new Response("classification updated successfully " . json_encode($jsonContent));
    }

    #[Route("/deleteclassificationJSON/{id}", name: "deleteclassificationJSON")]
    public function deleteclassificationJSON(Request $req, $id, NormalizerInterface $Normalizer):JsonResponse
    {

        $em = $this->getDoctrine()->getManager();
        $classification = $em->getRepository(classification::class)->find($id);
        $em->remove($classification);
        $em->flush();
        $jsonContent = $Normalizer->normalize($classification, 'json', ['groups' => 'classifications']);
        return new JsonResponse($jsonContent,200,[],true);
    }







}
