<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TyfloController extends AbstractController
{
    #[Route('/tyflo', name: 'app_tyflo')]
    public function index(): Response
    {
        return $this->render('tyflo/index.html.twig', [
            'controller_name' => 'TyfloController',
        ]);
    }
}
