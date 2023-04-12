<?php

// src/Controller/HexaDashController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HexaDashController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('hexadash/index.html');
    }


    public function projects(): Response
    {
        return $this->render('projet/index.html.twig
        ');
    }
}
