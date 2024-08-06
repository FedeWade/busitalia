<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TitlesController extends AbstractController
{
    #[Route('/titles', name: 'app_titles')]
    public function index(): Response
    {
        return $this->render('titles/index.html.twig', [
            'controller_name' => 'TitlesController',
        ]);
    }
}
