<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoanofthebookController extends AbstractController
{
    /**
     * @Route("/loanofthebook", name="loanofthebook")
     */
    public function index(): Response
    {
        return $this->render('loanofthebook/index.html.twig', [
            'controller_name' => 'LoanofthebookController',
        ]);
    }
}
