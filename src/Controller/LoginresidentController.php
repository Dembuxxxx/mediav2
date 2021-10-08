<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginresidentController extends AbstractController
{
    /**
     * @Route("/loginresident", name="loginresident")
     */
    public function index(): Response
    {
        return $this->render('loginresident/index.html.twig', [
            'controller_name' => 'LoginresidentController',
        ]);
    }
}
