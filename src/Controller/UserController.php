<?php

namespace App\Controller;

use App\Entity\User;
use Twilio\Serialize;
use App\Form\UserType;
use PhpParser\Builder\Method;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use FontLib\Table\Type\name;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
//#[IsGranted('ROLE_ADMIN')]
#[Route('/users')]
class UserController extends AbstractController
{
    private $em;
    private $userRepository;
    private $slugger;

    public function __construct(EntityManagerInterface $em, UserRepository $userRepository, SluggerInterface $slugger)
    {
        $this->em = $em;
        $this->userRepository = $userRepository;
        $this->slugger = $slugger;
    }
    #[Route('/admin', name: 'app_user_list')]
    public function index(Request $request): Response
    {
        $isVerified = $request->query->get('isVerified', 'All');
        $isArchived = $request->query->get('isArchived', 'All');
        $searchQuery = $request->query->get('search-query', '');
        $users = $this->userRepository->filter($isVerified, $isArchived, $searchQuery);
        //$users = $this->userRepository->findAll();
        $numberOfUsersPerPage = 5;
        $totalUsers = count($users);
        $totalPages = ceil($totalUsers / $numberOfUsersPerPage);
        $pageNumber = $request->query->getInt('page', 1);
        $offset = ($pageNumber - 1) * $numberOfUsersPerPage;
        $limit = $numberOfUsersPerPage;
        $usersOnCurrentPage = array_slice($users, $offset, $limit);

        return $this->render('BackOffice/user/index.html.twig', [
            'users' => $usersOnCurrentPage,
            'totalPages' => $totalPages,
            'currentPage' => $pageNumber,
            'isArchived' => $isArchived,
            'isVerified' => $isVerified,
            'searchQuery' => $searchQuery
        ]);
    }



    #[Route('/all')]
    public function AllUsers(UserRepository $repo, NormalizerInterface $normalizer)
    {

        $users = $repo->findAll();

        $usersNormalizer = $normalizer->normalize($users, 'json', ['groups' => "users"]);
        $json = json_encode($usersNormalizer);
        return new Response($json);
    }




    #[Route('/create', name: 'app_user_create')]
    public function new(Request $request, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setIsVerified(1);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            if ($user->getRole() == "Client") {
                $roles[] = 'ROLE_CLIENT';
                $user->setRoles($roles);
            }
            if ($user->getRole() == "Freelancer") {
                $roles[] = 'ROLE_FREELANCER';
                $user->setRoles($roles);
            }
            //upload img
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $image->move(
                        $this->getParameter('img_directory_profile'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'imageename' property to store img name
                // instead of its contents
                $user->setImage($newFilename);

                $this->em->persist($user);
                $this->em->flush();
            }
            return $this->redirectToRoute('app_user_list');
        }

        return $this->render('BackOffice/user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_user_show')]
    public function show($id): Response
    {
        return $this->render('BackOffice/user/show.html.twig', [
            'user' => $this->userRepository->find($id),
        ]);
    }

    #[Route('/by/{id}')]
    public function GetUserById($id, NormalizerInterface $normalizer)
    {

        $user = $this->userRepository->find($id);
        $usersNormalizer = $normalizer->normalize($user, 'json', ['groups' => "users"]);
        $data = [
            'id' => $user->getId(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'cin' => $user->getCin(),
            'adresse' => $user->getAdresse(),
            'email' => $user->getEmail(),
            'role' => $user->getRole(),
            'telephone' => $user->getTelephone(),
            'image' => $user->getImage(),
            'github_usename' => $user->getGithubUsername(),
            'github_token' => $user->getGithubToken()
        ];

        $jsonData = json_encode($data);

        return new JsonResponse($jsonData, 200, [], true);
    }


    #[Route('/{id}/profile', name: 'app_user_show_na')]
    public function show_user($id): Response
    {
        return $this->render('FrontOffice/user/show.html.twig', [
            'user' => $this->userRepository->find($id),
        ]);
    }

    #[Route('/{id}/edit/admin', name: 'app_user_edit')]
    public function edit(Request $request, $id, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = $this->userRepository->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //upload img
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $image->move(
                        $this->getParameter('img_directory_profile'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'imageename' property to store img name
                // instead of its contents
                $user->setImage($newFilename);

                $this->em->flush();
            }
            return $this->redirectToRoute('app_user_list');
        }

        return $this->renderForm('BackOffice/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit_na')]
    public function edit_user(Request $request, $id, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = $this->userRepository->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //upload img
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                // Move the file to the directory where images are stored
                try {
                    $image->move(
                        $this->getParameter('img_directory_profile'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'imageename' property to store img name
                // instead of its contents
                $user->setImage($newFilename);

                $this->em->flush();
            }

            return $this->redirectToRoute('app_user_list');
        }

        return $this->renderForm('FrontOffice/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/archive', name: 'app_user_archive')]
    public function archive($id): Response
    {
        $user = $this->userRepository->find($id);
        $user->setArchive(true);
        $this->em->flush();

        return $this->redirectToRoute('app_user_list');
    }
    #[Route('/{id}/editJson' ,name:'app_edit')]
    public function editJSON(Request $request, $id,NormalizerInterface $normalizer, UserPasswordHasherInterface $userPasswordHasher): JsonResponse
    {         

        $user = $this->userRepository->find($id);
        $user->setAdresse($request->get('adresse'));
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setCin($request->get('cin'));
        $user->setTelephone($request->get('telephone'));
        $user->setGithubUsername($request->get('github_username'));
        $this->em->persist($user);
        $this->em->flush();
        $normalizer = $normalizer->normalize($user, 'json', ['groups' => "users"]);
        return new JsonResponse(($normalizer));
    }
}
