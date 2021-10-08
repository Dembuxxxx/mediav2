<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationpageController extends AbstractController
{
    /**
     * @Route("/registrationpage", name="registrationpage")
     */
    public function index(): Response
    {
        return $this->render('registrationpage/index.html.twig', [
            'controller_name' => 'RegistrationpageController',
        ]);
    }
}
