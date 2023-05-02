<?php

namespace App\Controller;
use App\Entity\Don;
use App\Entity\Metier;
use App\Repository\DonRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;



use App\Repository\MetierRepository;

class FavorisController extends AbstractController
{
  

   
    /**
     * @Route("/favoris", name="app_favoris")
     */
    public function index(SessionInterface $session, MetierRepository $metierRepository)
    {
        $favoris = $session->get('favoris', []);
        $favorisWithData = [];
        if (is_array($favoris) || is_object($favoris)){
            foreach ($favoris as $id => $value) {
                $favorisWithData[] = [
                    'metier' => $metierRepository->find($id)
                ];
            }
        }

        return $this->render('favori/index.html.twig', [
            'items' => $favorisWithData
        ]);
    }

    /**
     * @Route("/favoris/add/{id}" , name="favoris_add")
     */
    public function add($id, SessionInterface $session , Metier $metier )
    {
        $favoris = $session->get('favoris', []);
        $id = $metier->getId();
        dump($id);
        if (!isset($favoris[$id])) {
            $favoris[$id] = true;
        }

        // On sauvegarde dans la session
        $session->set('favoris', $favoris);

        return $this->redirectToRoute("app_favoris", [
            'id' => $id
        ]);
    }

    /**
     * @Route("/favoris/remove/{id}" , name="favoris_remove")
     */
   
}