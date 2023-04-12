<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CurrentUser;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'client_home')]
    public function home(Request $request): Response
    {
        
        $session = $request->getSession();
        $username =$session->get('username');
        $role =$session->get('role');
        
        return $this->render('/hexadash/index.html.twig', [
            'controller_name' => 'ClientController',
            'currentusername' => $username,
            'currentRole' => $role,
        ]);
    }
}
