<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Adminemployepage1Controller extends AbstractController
{
    /**
     * @Route("/adminemployepage1", name="adminemployepage1")
     */
    public function index(): Response
    {
        return $this->render('adminemployepage1/index.html.twig', [
            'controller_name' => 'Adminemployepage1Controller',
        ]);
    }
}
