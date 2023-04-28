<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvenementRepository;
use App\Entity\Evenement;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Font\NotoSans;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository): Response
    {
        $evenements = $evenementRepository->findAll();

        return $this->render('FrontOffice/front/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    #[Route('/show/{id}', name: 'app_evenement_show1', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        $writer = new PngWriter();

        $label = Label::create('')->setFont(new NotoSans(8));
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

        return $this->render('FrontOffice/front/show.html.twig', [
            'evenement' => $evenement,
            'qrCodes' => $qrCodes,
        ]);
    }
}