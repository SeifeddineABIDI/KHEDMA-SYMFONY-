<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/homepage', name: 'app_home_page')]
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    #[Route('/alternate-page', name: 'app_alterpage')]
    public function alternate(): Response
    {
        return $this->render('app/alternate-page.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
}
