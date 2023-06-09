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
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;





#[Route('/projet')]
class ProjetController extends AbstractController
{
    #[Route('/', name: 'app_projet_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator): Response
    {       
        $user = $this->getUser()->getNom();
        $role=$request->getSession()->get('role');
        


        
        if ($role === 'freelancer') {
            $queryBuilder = $entityManager
                ->getRepository(Projet::class)
                ->createQueryBuilder('p')
                ->where('p.freelancer = :nom')
                ->setParameter('nom', $user)
                ->orderBy('p.id', 'ASC');
            
            $pagination = $paginator->paginate(
                $queryBuilder, // The query to paginate
                $request->query->getInt('page', 1), // The current page number
                15 // The number of items per page
            );
    
            return $this->render('/FrontOffice/project/projetfreelancer.html.twig', [
                'projets' => $pagination,
                'currentusername' => $user,
                'currentRole' => $role,
            ]);
        } else {
            $queryBuilder = $entityManager
                ->getRepository(Projet::class)
                ->createQueryBuilder('p')
                ->where('p.client = :nom')
                ->setParameter('nom', $user)
                ->orderBy('p.id', 'ASC');
    
            $pagination = $paginator->paginate(
                $queryBuilder, // The query to paginate
                $request->query->getInt('page', 1), // The current page number
                15 // The number of items per page
            );
    
            return $this->render('/FrontOffice/project/projetclient.html.twig', [
                'projets' => $pagination,
                'currentusername' => $user,
                'currentRole' => $role,
            ]);
        }
    }

    #[Route('/new', name: 'app_projet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $projet = new Projet();
        // $username = $request->getSession()->get('username');
        // $githubToken = $request->getSession()->get('githubToken');
        $user = $this->getUser();
        $token = $user->getGithubToken();
        $githubUsername = $user->getGithubUsername();
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);
        $projet->setClient($user->getNom());
        

        if ($form->isSubmitted() && $form->isValid()) {
            // Persist the new project to the database
            $entityManager->persist($projet);
            $entityManager->flush();

            // Create a GitHub repository for the new project
            $repositoryName = $projet->getNom(); // Assuming the project has a 'name' property
            // Assuming you have a user entity with a 'githubAccessToken' property


            $freelancername=$form->get('freelancer')->getData();



       
            
            $user = $entityManager->getRepository(User::class)->findOneBy(['nom' => $freelancername]);
            
          
            
           
            
            
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



            
            

            // Redirect to the project index page
            return $this->redirectToRoute('app_projet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('FrontOffice/project/addproject.html.twig', [
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
            // $projet->setArchive("1");
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


    #[Route('/projetmobile', name: 'app_projet_mobile', methods: ['GET'])]
    public function indexmobile(EntityManagerInterface $entityManager, Request $request, PaginatorInterface $paginator, NormalizerInterface $normalizer): Response
    {       
        /*$username = $request->getSession()->get('username');
        $role=$request->getSession()->get('role');*/

        $username = $request->query->get('username');
        $role = $request->query->get('role');
    
        // If the parameters are not present in the URL, you can set default values here:
        if (!$username) {
            $username = "aa";
        }
        if (!$role) {
            $role = "Client";
        }
        


        
        if ($role === 'freelancer') {
            $queryBuilder = $entityManager
                ->getRepository(Projet::class)
                ->createQueryBuilder('p')
                ->where('p.freelancer = :username')
                ->setParameter('username', $username)
                ->orderBy('p.id', 'ASC');
            
            $pagination = $paginator->paginate(
                $queryBuilder, // The query to paginate
                $request->query->getInt('page', 1), // The current page number
                15 // The number of items per page
            );

            $Projetmobile= $normalizer->normalize($pagination,'json', ['groups' => "projet"]);
            $json = json_encode($Projetmobile);
            return new Response($json);

            /*return $this->render('/FrontOffice/project/projetfreelancer.html.twig', [
                'projets' => $pagination,
                'currentusername' => $username,
                'currentRole' => $role,
            ]);*/
        } else {
            $queryBuilder = $entityManager
                ->getRepository(Projet::class)
                ->createQueryBuilder('p')
                ->where('p.client = :username')
                
                ->setParameter('username', $username)
                ->orderBy('p.id', 'ASC');
    
            $pagination = $paginator->paginate(
                $queryBuilder, // The query to paginate
                $request->query->getInt('page', 1), // The current page number
                15 // The number of items per page
            );
              $Projetmobile= $normalizer->normalize($pagination,'json', ['groups' => "projet"]);
            $json = json_encode($Projetmobile);
            return new Response($json);
           /* return $this->render('/FrontOffice/project/projetclient.html.twig', [
                'projets' => $pagination,
                'currentusername' => $username,
                'currentRole' => $role,
            ]);*/
        }
    }

    #[Route('/projetadd', name: 'app_projet_add', methods: ['POST'])]
public function add(EntityManagerInterface $entityManager, Request $request, ValidatorInterface $validator, SerializerInterface $serializer): Response
{
    


    $projet = new Projet();
    $domaine = $request->query->get('domaine');
        $nom = $request->query->get('nom');
        $freelancer = $request->query->get('freelancer');
        $client = $request->query->get('client');

        $projet->setNom($nom);
        $projet->setFreelancer($freelancer);
        $projet->setDomaine($domaine);
        $projet->setClient($client);

    // Persist the Projet object to the database
    $entityManager->persist($projet);
    $entityManager->flush();

    // Serialize the newly created Projet object to JSON and return it in the response
    $jsonProjet = $serializer->serialize($projet, 'json');
    return new Response($jsonProjet, 201, ['Content-Type' => 'application/json']);
}

    
}
