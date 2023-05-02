<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvenementRepository;
use App\Entity\Evenement;
use Endroid\QrCode\QrCode; /* importe la classe QrCode du package endroid/qr-code */
use Knp\Component\Pager\PaginatorInterface;

use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\HttpFoundation\Request;

use Endroid\QrCode\Label\Font\NotoSans;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front', methods: ['GET'])]
    public function index(Request $request, EvenementRepository $evenementRepository, PaginatorInterface $paginator): Response
    {
        $evenements = $evenementRepository->findAll();


        $evenements = $paginator->paginate(
            $evenements, /* query NOT result */
            $request->query->getInt('page', 1),
            3
        );

        return $this->render('FrontOffice/front/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    #[Route('/show/{id}', name: 'app_evenement_show1', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        $writer = new PngWriter();

        $label = Label::create('')->setFont(new NotoSans(8));  /* la méthode setFont() est appelée sur cet objet pour spécifier la police 
                                                                d'écriture à utiliser pour le texte du label. Dans ce cas,
                                                                la police est définie comme étant NotoSans avec une taille de 8 points. */
        $qrCode = new QrCode(sprintf(
            'Evenement %d, Titre: %s, Lieu: %s',
            $evenement->getId(), 
            $evenement->getTitre(),
            $evenement->getLieu()
        ));

        $qrCodes = $writer->write(
            $qrCode,
            null,
            $label->setText('QRCode')
        )->getDataUri();
/*         cette ligne de code génère l'image QR code avec le contenu du message, ajoute un label "QRCode" 
        et retourne l'URL de l'image encodée en base64. Le résultat 
        est stocké dans la variable $qrCodes qui est utilisée pour afficher l'image QR code dans la vue Twig. */
      
        return $this->render('FrontOffice/front/show.html.twig', [
            'evenement' => $evenement,
            'qrCodes' => $qrCodes,
        ]);
    }
}
