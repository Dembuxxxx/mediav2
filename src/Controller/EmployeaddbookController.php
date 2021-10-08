<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeaddbookController extends AbstractController
{
    /**
     * @Route("/employeaddbook", name="employeaddbook")
     */
    public function index(): Response
    {
        return $this->render('employeaddbook/index.html.twig', [
            'controller_name' => 'EmployeaddbookController',
        ]);
    }
}
