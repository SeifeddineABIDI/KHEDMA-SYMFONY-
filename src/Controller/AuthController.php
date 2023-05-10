<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Security\EmailVerifier;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends AbstractController     
{
    private EmailVerifier $emailVerifier;
    private $slugger;

    public function __construct(EmailVerifier $emailVerifier, SluggerInterface $slugger)
    {
        $this->emailVerifier = $emailVerifier;
        $this->slugger = $slugger;
    }
    #[Route('/addoneone')]
    public function newUser (EntityManagerInterface $em, Request $request, UserPasswordHasherInterface $passwordHasher,NormalizerInterface $normalizer):JsonResponse
    
    {   
        
        $user = new User();
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setEmail($request->get('email'));
        $user->setRole($request->get('role'));
        $user->setCin($request->get('cin'));
        $user->setTelephone($request->get('telephone'));
        $user->setAdresse($request->get('adresse'));
        $user->setGithubUsername($request->get('github_username'));
        $user->setPassword($request->get('password'));
        $user->setIsVerified(1);

        $pass=$user->getPassword();
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
        $pass,       );
        $user->setPassword($hashedPassword);
        if($user->getRole()=="Client"){
            $user->setRoles(["ROLE_CLIENT"]);
        }
        else {
            $user->setRoles(["ROLE_FREELANCER"]);

        }
        
            $em->persist($user);
            $em->flush();
            $this->emailVerifier->sendEmailConfirmation(
                'app_verify_email',
                $user,
                (new TemplatedEmail())
                    ->from(new Address('admin@khedma.com', 'Khedma'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/welcome.html.twig')
            );
            $jsonContent = $normalizer-> normalize($user,'json',['groups',"users"]);
            return new JsonResponse($jsonContent);
    }
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
    #[Route(path: '/loginM')]
    public function loginM(Request $request, NormalizerInterface $Normalizer,UserRepository $repo,UserPasswordHasherInterface $passwordHasher):JsonResponse
    {

        
        $user = new User;
        $user->setEmail($request->get('email'));
        $pass=$request->get('password');
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $pass
        );
        $user->setPassword($hashedPassword);
   

     $user1= $repo->findOneBy(['email' => $user->getEmail()]); 
     
    if (!$user1) {
        // User not found
        return new JsonResponse(['message' => 'failed'] );
    }

    if (!$passwordHasher->isPasswordValid($user1,$pass)) {
        // Invalid credentials
        return new JsonResponse(['message' => 'failed']);
    }

    // Login successful
    $jsonContent = $Normalizer->normalize($user1, 'json', ['groups' => 'users']);
    return new JsonResponse($jsonContent);
      
}

    // Login successful
    // Login successful


    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
