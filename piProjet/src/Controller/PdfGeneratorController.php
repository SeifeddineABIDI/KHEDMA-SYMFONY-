<?php
 
namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use App\Entity\Metier;
use Dompdf\Options;
use App\Repository\MetierRepository;

use App\Repository\DonRepository;
 
class PdfGeneratorController extends AbstractController
{
    #[Route('/pdf/generator', name: 'app_pdf_generator')]
    public function pdf(MetierRepository  $repository )
    {
        {
            $metier=$repository->findAll();
            // $imagePath = $this->getParameter('kernel.project_dir') . '/public/uploads/metierimage/' . $repository->getImage();
            $imagePath = $this->getParameter('kernel.project_dir') . '/public/uploads/metierimage/' . 'mm.jpg';
            $imageData = $this->imageToBase64($imagePath);
            // dump($imagePath);

            
            // On définit les options du PDF
            $pdfOptions = new Options();
            // Police par défaut
            $pdfOptions->set('defaultFont', 'Arial');
            $pdfOptions->setIsRemoteEnabled(true);
    
            // On instancie Dompdf
            $dompdf = new Dompdf($pdfOptions);
            
    
            // On génère le html
            $html = $this->renderView('pdf_generator/index.html.twig',
                ['metier'=>$metier ,
                'image_data' => $imageData,]);
            //$html = $this->renderView('pdf_generator/index.html.twig',
                //['don'=>$don ]);
    //
    
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
    
            // On génère un nom de fichier
            $fichier = 'Tableau des metiers.pdf';
    
            // On envoie le PDF au navigateur
            $dompdf->stream($fichier, [
                'Attachment' => true
            ]);
    
            return new Response();
        }
    }
 
   
    private function imageToBase64($path) {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }
    
}