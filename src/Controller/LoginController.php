<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Service\CurrentUser;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request, EntityManagerInterface $entityManager, CurrentUser $currentUser): Response
    {
        // Render the login form
        $content = $this->render('login/login.html.twig', [
            'controller_name' => 'LoginController',
        ])->getContent();
        
        // If the form is submitted
        if ($request->getMethod() == 'POST') {
            // Get the submitted username and password
            $username = $request->request->get('username');
            $password = $request->request->get('password');
            
            // Get the user from the database based on the username
            $user = $entityManager->getRepository(User::class)
                                  ->findOneBy(['username' => $username]);
                                  
            // Debugging: Print the user object to the screen
            $currentUser->setUsername($username);
            
            
            // If the user exists and the password is correct
            if ($user && $password == $user->getPassword()) {
                echo("PASSED");
                $session = $request->getSession();
                $session->set('username', $username);
                $session->set('role', $user->getRole());
                
                $currentUser->setUsername($username);
                
                
                // Redirect the user based on their account type
                if ($user->getRole() == 'freelancer') {
                    
                    
                    return $this->redirectToRoute('freelancer_home');

                } else {
                    
                    return $this->redirectToRoute('client_home');
                }
            }
        }
        
        // Return the rendered login form
        return new Response($content);
    }
}
