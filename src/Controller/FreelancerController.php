<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Service\CurrentUser;

class FreelancerController extends AbstractController
{
    #[Route('/freelancer', name: 'freelancer_home')]
    public function home(Request $request,CurrentUser $currentUser): Response
    {
       
        $session = $request->getSession();
        $username =$session->get('username');
        
        return $this->render('/freelancer/index.html.twig', [
            'controller_name' => 'FreelancerController',
            'currentusername' => $username,
        ]);
    }
}
