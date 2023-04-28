<?php

namespace App\Controller;

use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CategorieRepository;
use App\Repository\EvenementRepository;

class ChartController extends AbstractController
{
    #[Route('/chart', name: 'chart')]
    public function categoriesEvenements(CategorieRepository $categorieRepository, EvenementRepository $evenementRepository): Response
    {
        $categories = $categorieRepository->findAll();
        $data = [];

        foreach ($categories as $categorie) {
            $evenementsCount = count($evenementRepository->findBy(['categorie' => $categorie]));
            $data[] = [
                'categorie' => $categorie->getNom(),
                'evenementsCount' => $evenementsCount,
            ];
        }

        return $this->render('chart/index.html.twig', [
            'data' => $data,
        ]);
    }
}
