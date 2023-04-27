<?php

namespace App\Controller;

use App\Entity\Metier;
use App\Entity\SousMetier;
use App\Form\SousMetierType;
use App\Repository\SousMetierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/sous/metier')]
class SousMetierController extends AbstractController
{
    #[Route('/', name: 'app_sous_metier_index')]
    public function index(SousMetierRepository $sousMetierRepository): Response
    {
    
        return $this->render('sous_metier/index.html.twig', [
            'sous_metiers' => $sousMetierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sous_metier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SousMetierRepository $sousMetierRepository): Response
    {
        $sousMetier = new SousMetier();
        $form = $this->createForm(SousMetierType::class, $sousMetier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sousMetierRepository->save($sousMetier, true);

            return $this->redirectToRoute('app_sous_metier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sous_metier/new.html.twig', [
            'sous_metier' => $sousMetier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sous_metier_show', methods: ['GET'])]
    public function show(SousMetier $sousMetier): Response
    {
        return $this->render('sous_metier/show.html.twig', [
            'sous_metier' => $sousMetier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sous_metier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SousMetier $sousMetier, SousMetierRepository $sousMetierRepository): Response
    {
        $form = $this->createForm(SousMetierType::class, $sousMetier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sousMetierRepository->save($sousMetier, true);

            return $this->redirectToRoute('app_sous_metier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sous_metier/edit.html.twig', [
            'sous_metier' => $sousMetier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sous_metier_delete', methods: ['POST'])]
    public function delete(Request $request, SousMetier $sousMetier, SousMetierRepository $sousMetierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sousMetier->getId(), $request->request->get('_token'))) {
            $sousMetierRepository->remove($sousMetier, true);
        }

        return $this->redirectToRoute('app_sous_metier_index', [], Response::HTTP_SEE_OTHER);
    }
   
    #[Route('/stat/stat', name: 'app_cons_stat', methods: ['GET'])]
    public function yourAction(EntityManagerInterface $entityManager,SousMetierRepository $c)
    {
        $total=0;
        $tot_50=0;
        $tot_100=0;
        $tot_200=0;
        $consultations = $c->findAll();
        foreach ($consultations as $consultation) {
            if ($consultation->getDomaine()<50) {
                $tot_50++;
            } else if ($consultation->getDomaine()>50&&$consultation->getDomaine()<200) {
                $tot_100++;
            } else if ($consultation->getDomaine()>200){
                $tot_200++;
            }
            $total++;
        }
$pour_50=($tot_50*100)/$total; 
$pour_100=($tot_100*100)/$total; 
$pour_200=($tot_200*100)/$total;  

$data = array(
    '<50' => $pour_50,
    '>50 et <200' => $pour_100,
    '>200' => $pour_200
);
        return $this->render('/sous_metier/stat.html.twig', [
            'data' => $data,
            
        ]);
    }







}
