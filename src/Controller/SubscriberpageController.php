<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubscriberpageController extends AbstractController
{
    /**
     * @Route("/subscriberpage", name="subscriberpage")
     */
    public function index(): Response
    {
        return $this->render('subscriberpage/index.html.twig', [
            'controller_name' => 'SubscriberpageController',
        ]);
    }
}
