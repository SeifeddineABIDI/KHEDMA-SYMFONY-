<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Entity\Projet;
use App\Form\TacheType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/tache')]
class TacheController extends AbstractController
{
    #[Route('/projet/{projetId}/tache', name: 'app_tache_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,int $projetId): Response
    {
        $taches = $entityManager
            ->getRepository(Tache::class)
            ->findBy(['project' => $projetId]);

        return $this->render('tache/index.html.twig', [
            'taches' => $taches,
            'projetId' => $projetId,
        ]);
    }

    

    #[Route('/projet/{projetId}/tache/add', name: 'app_tache_new', methods: ['GET', 'POST'])]
public function add(Request $request, EntityManagerInterface $entityManager, int $projetId): Response
{
    $tache = new Tache();
    $form = $this->createForm(TacheType::class, $tache);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $tache->setProject($entityManager->getReference(Projet::class, $projetId));
        $entityManager->persist($tache);
        $entityManager->flush();

        return $this->redirectToRoute('app_tache_index', ['projetId' => $projetId], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('tache/add.html.twig', [
        'form' => $form,
        'projetId' => $projetId,
    ]);
}

    #[Route('/{id}', name: 'app_tache_show', methods: ['GET'])]
    public function show(Tache $tache): Response
    {
        return $this->render('tache/show.html.twig', [
            'tache' => $tache,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tache_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_tache_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tache/edit.html.twig', [
            'tache' => $tache,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tache_delete', methods: ['POST'])]
    public function delete(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tache->getId(), $request->request->get('_token'))) {
            $entityManager->remove($tache);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_tache_index', [], Response::HTTP_SEE_OTHER);
    }


    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/update_tache_status/{tache_id}', name: 'app_update_tache_status', methods: ['POST'])]
    public function updateTacheStatus(Request $request)
    {   

        var_dump($request->request->all());
        $tache = $this->entityManager->getRepository(Tache::class)->find($request->request->get('tache_id'));

        if (!$tache) {
            throw $this->createNotFoundException('No tache found for id '.$request->request->get('tache_id'));
        }

        $tache->setStatus($request->request->get('new_status'));

        $this->entityManager->flush();

        return $this->json(['success' => true]);
    }

    
}
