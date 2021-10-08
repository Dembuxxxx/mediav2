<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountmanagementController extends AbstractController
{
    /**
     * @Route("/accountmanagement", name="accountmanagement")
     */
    public function index(): Response
    {
        return $this->render('accountmanagement/index.html.twig', [
            'controller_name' => 'AccountmanagementController',
        ]);
    }
}
