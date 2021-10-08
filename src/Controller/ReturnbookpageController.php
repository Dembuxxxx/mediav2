<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReturnbookpageController extends AbstractController
{
    /**
     * @Route("/returnbookpage", name="returnbookpage")
     */
    public function index(): Response
    {
        return $this->render('returnbookpage/index.html.twig', [
            'controller_name' => 'ReturnbookpageController',
        ]);
    }
}
