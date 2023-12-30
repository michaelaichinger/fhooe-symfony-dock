<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class XmasController extends AbstractController
{
    #[Route('/xmas/{name}', name: 'app_xmas')]
    public function index($name = "the World"): Response
    {
        return $this->render('xmas/index.html.twig', [
            'name' => $name,
        ]);
    }
}
