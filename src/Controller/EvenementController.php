<?php

namespace App\Controller;

use App\Entity\Raiting;

use App\Entity\Evenement;
use App\Form\EvenementType;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Knp\Component\Pager\PaginatorInterface;

use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


use Endroid\QrCode\QrCode;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/evenement')]
class EvenementController extends AbstractController
{





    private $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }
    protected function getDoctrine(): ManagerRegistry
    {
        return $this->managerRegistry;
    }


    #[Route('/', name: 'app_evenement_index', methods: ['GET', 'POST'])]
    public function index(Request $request, EvenementRepository $evenementRepository, PaginatorInterface $paginator): Response
    {
        $back = null;
        $type = $request->request->get('optionsearch');
        $value = $request->request->get('Search');
        $SortKey = $request->request->get('optionsRadios');

        if ($SortKey) {
            switch ($SortKey) {
                case 'id':
                    $evenement = $evenementRepository->SortByid();
                    break;

                case 'titre':
                    $evenement = $evenementRepository->SortBytitre();
                    break;

                default:
                    $evenement = $evenementRepository->findAll();
            }
        } else if ($type && $value) {
            switch ($type) {
                case 'id':
                    $evenement = $evenementRepository->findByid($value);
                    break;

                case 'titre':
                    $evenement = $evenementRepository->findBytitre($value);
                    break;

                default:
                    $evenement = $evenementRepository->findAll();
            }
        } else {
            $evenement = $evenementRepository->findAll();
        }

        if (count($evenement)) {
            $back = "success";
        } else {
            $back = "failure";
        }

        $evenement = $paginator->paginate(
            $evenement, /* query NOT result */
            $request->query->getInt('page', 1),
            2
        );







        return $this->render('BackOffice/evenement/index.html.twig', [
            'evenements' => $evenement,
        ]);





        
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvenementRepository $evenementRepository): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('BackOffice/evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('BackOffice/evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }
    

    #[Route('/{id}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('BackOffice/evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->request->get('_token'))) {
            $evenementRepository->remove($evenement, true);
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }





    // public function eventQrCodeAction($id)
    // {
    //     // Récupérez l'événement à partir de la base de données
    //     $evenement = $this->getDoctrine()->getRepository(Evenement::class)->find($id);
    
    //     // Créez un objet QrCode avec le titre et la description de l'événement
    //     $qrCode = new QrCode($evenement->getTitle() . ': ' . $evenement->getDescription());
    
    //     // Configurez les options de QR Code selon vos besoins
    //     $qrCode->setSize(300);
    
    //     // Retournez le code QR en tant que réponse HTTP
    //     return new Response($qrCode->writeString(), 200, ['Content-Type' => $qrCode->getContentType()]);
    // }
    

    #[Route('/rechercher', name: 'app_evenement_rechercher', methods: ['POST'])]
public function recherche(Request $request, EvenementRepository $evenementRepository): Response
{
    $titre = $request->request->get('titre');

    $evenements = $evenementRepository->createQueryBuilder('e')
        ->andWhere('e.titre LIKE :titre')
        ->setParameter('titre', '%' . $titre . '%')
        ->getQuery()
        ->getResult();

    return $this->render('BackOffice/evenement/index.html.twig', [
        'evenements' => $evenements,
    ]);















    
}













/* 

#[Route('/qr-code', name: 'app_evenement_qr_code', methods: ['GET'])]
public function qrCode(EvenementRepository $evenementRepository, UrlGeneratorInterface $urlGenerator): Response
{
    // Récupérez tous les événements depuis la base de données
    $evenements = $evenementRepository->findAll();
    
    // Créez un objet Spreadsheet pour stocker les codes QR
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('QR Codes');
    
    // Générez un code QR pour chaque événement et ajoutez-le au Spreadsheet
    $rowIndex = 1;
    foreach ($evenements as $evenement) {
        // Créez un objet QrCode avec le titre et la description de l'événement
        $qrCode = new QrCode($evenement->get() . ': ' . $evenement->getDescription());
    
        // Configurez les options de QR Code selon vos besoins
        $qrCode->setSize(300);
    
        // Ajoutez le code QR au Spreadsheet
        $url = $urlGenerator->generate('app_evenement_show', ['id' => $evenement->getId()], UrlGeneratorInterface::ABSOLUTE_URL);
        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setName('QR Code');
        $drawing->setDescription('QR Code for ' . $evenement->getTitre());
        $drawing->setPath($qrCode->writeDataUri());
        $drawing->setHeight(300);
        $drawing->setWidth(300);
        $drawing->setCoordinates('A' . $rowIndex);
        $sheet->getRowDimension($rowIndex)->setRowHeight(300);
        $sheet->getColumnDimension('A')->setWidth(20);
        $sheet->getColumnDimension('B')->setWidth(50);
        $sheet->getColumnDimension('C')->setWidth(20);
        $sheet->getColumnDimension('D')->setWidth(20);
        $sheet->setCellValue('B' . $rowIndex, $evenement->getTitre());
        $sheet->setCellValue('C' . $rowIndex, $evenement->getDate()->format('Y-m-d'));
        $sheet->setCellValue('D' . $rowIndex, $evenement->getLieu());
        $sheet->setHyperlink('A' . $rowIndex, $url);
        $sheet->getCell('A' . $rowIndex)->setValueExplicit('QR Code for ' . $evenement->getTitre(), \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
        $sheet->getRowDimension($rowIndex)->setOutlineLevel(1);
        $sheet->getRowDimension($rowIndex)->setCollapsed(true);
        $rowIndex++;
    }
    
    // Envoyez le Spreadsheet au navigateur en tant que fichier Excel
    $writer = new Xlsx($spreadsheet);
    $response = new Response();
    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $response->headers->set('Content-Disposition', 'attachment;filename="qr-codes.xlsx"');
    $response->setContent($writer->saveToString());
    
    return $response;
}

 */










 
     

}
