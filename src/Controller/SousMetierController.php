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
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/sousmetier')]
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
    public function new(Request $request, SousMetierRepository $sousMetierRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $sousMetier = new SousMetier();
        $form = $this->createForm(SousMetierType::class, $sousMetier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sousMetier->addUser($user);
            $em->persist($sousMetier);
            $em->flush();

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
    public function edit(Request $request, SousMetier $sousMetier, SousMetierRepository $sousMetierRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(SousMetierType::class, $sousMetier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sousMetier->addUser($user);
            $em->persist($sousMetier);
            $em->flush();

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




////////////// json pour mobile /////////////

    

#[Route('/affichage/mobile')]
public function allApp(SousMetierRepository $sousMetierRepository,NormalizerInterface $s):JsonResponse
{
    $x=$sousMetierRepository->findAll();

    $json=$s->normalize($x,'json',['groups'=>"SousMetiers"]);
    return new JsonResponse(($json));
 
}
#[Route('/ajout/mobile', name: 'app_sousmetier_ajoutApp')]
public function AjoutMobil(Request $req,NormalizerInterface $s,ManagerRegistry $doctrine){
    
    $em = $doctrine->getManager();
    $metier=new SousMetier();
    $metier->setLibelle($req->get('libelle'));
    $metier->setDomaine($req->get('domaine'));
  
    $em -> persist($metier);
    $em->flush();
    $json=$s->normalize($metier,'json',['groups'=>"sousMetiers"]);
    return new Response(json_encode($json));
 
}

#[Route('/Update/mobile/{id}', name: 'app_sousmetier_editApp')]
public function UpdateMobile(Request $req,$id,NormalizerInterface $s,ManagerRegistry $doctrine){
    
    $em = $doctrine->getManager();
    $metier=$em->getRepository(SousMetier::class)->find($id);
    $metier->setLibelle($req->get('libelle'));
    $metier->setDomaine($req->get('domaine'));
  
    $em->flush();
    $json=$s->normalize($metier,'json',['groups'=>"sousMetiers"]);
    return new Response(" Sous metier updated successfully".json_encode($json));
 
}


#[Route('/delete/mobile/{id}', name: 'app__deleteApp')]
public function deleteMobile($id,NormalizerInterface $s,ManagerRegistry $doctrine)
{
    
    $em = $doctrine->getManager();
    $metier=$em->getRepository(SousMetier::class)->find($id);
    $em->remove($metier);
    
    
    $em->flush();

    $json=$s->normalize($metier,'json',['groups'=>"sousMetiers"]);
    return new Response(" Sous metier deleted successfully".json_encode($json));
 
}






}