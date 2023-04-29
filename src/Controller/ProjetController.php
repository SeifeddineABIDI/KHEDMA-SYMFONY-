<?php

namespace App\Controller;

use App\Entity\Projet;
use App\Entity\User;
use App\Form\ProjetType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpClient\HttpClient;
use GuzzleHttp\Client;
use PhpParser\Node\Stmt\Echo_;
use Symfony\Component\HttpFoundation\File\UploadedFile;


use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;





#[Route('/projet')]
class ProjetController extends AbstractController
{
    #[Route('/', name: 'app_projet_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {       
        $username = $request->getSession()->get('username');
        $role=$request->getSession()->get('role');
        


        
        if ($role === 'freelancer') {
            $queryBuilder = $entityManager
                ->getRepository(Projet::class)
                ->createQueryBuilder('p')
                ->where('p.freelancer = :username')
                ->andWhere('p.archive = 0')
                ->setParameter('username', $username)
                ->orderBy('p.id', 'ASC');
            
            $pagination = $paginator->paginate(
                $queryBuilder, // The query to paginate
                $request->query->getInt('page', 1), // The current page number
                15 // The number of items per page
            );
    
            return $this->render('/hexadash/projetfreelancer.html.twig', [
                'projets' => $pagination,
                'currentusername' => $username,
                'currentRole' => $role,
            ]);
        } else {
            $queryBuilder = $entityManager
                ->getRepository(Projet::class)
                ->createQueryBuilder('p')
                ->where('p.client = :username')
                ->andWhere('p.archive = 0')
                ->setParameter('username', $username)
                ->orderBy('p.id', 'ASC');
    
            $pagination = $paginator->paginate(
                $queryBuilder, // The query to paginate
                $request->query->getInt('page', 1), // The current page number
                15 // The number of items per page
            );
    
            return $this->render('/hexadash/projetclient.html.twig', [
                'projets' => $pagination,
                'currentusername' => $username,
                'currentRole' => $role,
            ]);
        }
    }

    #[Route('/new', name: 'app_projet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $projet = new Projet();
        $username = $request->getSession()->get('username');
        $githubToken = $request->getSession()->get('githubToken');
        $githubusername = $request->getSession()->get('githubUsername');
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);
        $projet->setClient($username);
        

        if ($form->isSubmitted() && $form->isValid()) {
            // Persist the new project to the database
            $entityManager->persist($projet);
            $entityManager->flush();

            // Create a GitHub repository for the new project
            $repositoryName = $projet->getNom(); // Assuming the project has a 'name' property
            $token = $githubToken ;// Assuming you have a user entity with a 'githubAccessToken' property


            $freelancername=$form->get('freelancer')->getData();



       
            $githubUsername = "";
            $user = $entityManager->getRepository(User::class)->findOneBy(['username' => $freelancername]);
            
            if($user) {
               $githubUsername = $user->getGithubUsername();
               
            }
            
           
            
            
            $client = new Client([
                'base_uri' => 'https://api.github.com/',
                'headers' => [
                    'Authorization' => "token $token",
                    'Accept' => 'application/vnd.github.v3+json',
                ]
            ]);
            
            $response = $client->post('user/repos', [
                'json' => [
                    'name' => $repositoryName,
                    'private' => false,
                ]
            ]);



            $client = new Client([
                'base_uri' => "https://api.github.com/repos/$githubusername/$repositoryName/",
                'headers' => [
                    'Accept' => 'application/vnd.github.v3+json',
                    'Authorization' => "token $token",
                ]
            ]);
            
            $response = $client->put("collaborators/$githubUsername", [
                'json' => [
                    'permission' => 'admin'
                ]
            ]);
            

            // Redirect to the project index page
            return $this->redirectToRoute('app_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hexadash/addproject.html.twig', [
            'projet' => $projet,
            'form' => $form,
        ]);
    }

 

    #[Route('/{id}', name: 'app_projet_show', methods: ['GET'])]
    public function show(Projet $projet): Response
    {
        return $this->render('projet/show.html.twig', [
            'projet' => $projet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_projet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Projet $projet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('projet/edit.html.twig', [
            'projet' => $projet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_projet_delete', methods: ['POST'])]
    public function delete(Request $request, Projet $projet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projet->getId(), $request->request->get('_token'))) {
            $projet->setArchive("1");
            $entityManager->persist($projet);
            $entityManager->flush();
        }
    
        return $this->redirectToRoute('app_projet_index', [], Response::HTTP_SEE_OTHER);
    }



    #[Route('/projet/{projetId}/{projetNom}/{projetClient}/files', name: 'app_upload_file',methods: ['GET', 'POST'])]
    public function uploadFile(Request $request): Response
    {   



        $projetNom = $request->query->get('projetNom');
    $projetClient = $request->query->get('projetClient');
        
        $githubToken = $request->getSession()->get('githubToken');
        $githubusername = $request->getSession()->get('githubUsername');
        $form = $this->createFormBuilder()
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ])
            ->add('file', FileType::class, [
                'label' => 'File',
            ])
            ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // handle file upload
            $uploadedFile = $form->get('file')->getData();
            $fileName = $uploadedFile->getClientOriginalName();
            $fileContents = file_get_contents($uploadedFile->getPathname());
    
            $client = new Client([
                'base_uri' => 'https://api.github.com/',
                'headers' => [
                    'Authorization' => "token $githubToken",
                    'Accept' => 'application/vnd.github.v3+json',
                ]
            ]);
            

            $path = " New_$fileName";
            $uploadedFile = $form->get('file')->getData();
            $fileContents = file_get_contents($uploadedFile->getPathname());

$response = $client->put("repos/$projetClient/$projetNom/contents/$path", [
    'json' => [
        'message' => 'Add new file',
        'committer' => [
            'name' => "$githubusername",
            'email' => 'your.email@example.com',
        ],
        'content' => base64_encode($fileContents),
    ],
    'headers' => [
        'Accept' => 'application/vnd.github.v3+json',
    ],
    'owner' => 'username',
    'repo' => 'repo_name',
]);



$this->addFlash('success', 'The file has been uploaded.');


            
        }
 
        return $this->render('/hexadash/uploadfile.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    
}
