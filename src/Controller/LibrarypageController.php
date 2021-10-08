<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibrarypageController extends AbstractController
{
    /**
     * @Route("/librarypage", name="librarypage")
     */
    public function index(): Response
    {
        return $this->render('librarypage/index.html.twig', [
            'controller_name' => 'LibrarypageController',
        ]);
    }
}
