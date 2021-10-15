<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilpageController extends AbstractController
{
    /**
     * @Route("/profilpage", name="profilpage")
     */
    public function index(): Response
    {
        return $this->render('profilpage/index.html.twig', [
            'controller_name' => 'ProfilpageController',
        ]);
    }
}
