<?php

namespace App\Controller;

use App\Entity\Projet;
use App\Form\ProjetType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/projet')]
class ProjetController extends AbstractController
{
    #[Route('/', name: 'app_projet_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,Request $request): Response
    {   

        $username = $request->getSession()->get('username');
        $role=$request->getSession()->get('role');

       
        
        if ($role === 'freelancer') {
            $projets = $entityManager
                ->getRepository(Projet::class)
                ->findBy(['freelancer' => $username]);


                return $this->render('/hexadash/projetfreelancer.html.twig', [
                    'projets' => $projets,
                    'currentusername' => $username,
            'currentRole' => $role,
                ]);
        } else {
            $projets = $entityManager
                ->getRepository(Projet::class)
                ->findBy(['client' => $username]);


                return $this->render('/hexadash/projetclient.html.twig', [
                    'projets' => $projets,
                    'currentusername' => $username,
            'currentRole' => $role,
                ]);
        }

      
    }

    #[Route('/new', name: 'app_projet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $projet = new Projet();
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($projet);
            $entityManager->flush();

            return $this->redirectToRoute('app_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('projet/new.html.twig', [
            'projet' => $projet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_projet_show', methods: ['GET'])]
    public function show(Projet $projet): Response
    {
        return $this->render('projet/show.html.twig', [
            'projet' => $projet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_projet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Projet $projet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('projet/edit.html.twig', [
            'projet' => $projet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_projet_delete', methods: ['POST'])]
    public function delete(Request $request, Projet $projet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($projet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_projet_index', [], Response::HTTP_SEE_OTHER);
    }
}
