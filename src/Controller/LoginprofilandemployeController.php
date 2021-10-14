<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginprofilandemployeController extends AbstractController
{
    /**
     * @Route("/loginprofilandemploye", name="loginprofilandemploye")
     */
    public function index(): Response
    {
        return $this->render('loginprofilandemploye/index.html.twig', [
            'controller_name' => 'LoginprofilandemployeController',
        ]);
    }
}
