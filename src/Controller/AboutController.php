<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route(
        path: [
            'en' => '/about',
            'da' => '/om'
        ],
        name: 'about'
    )]
    public function index(): Response
    {
        return $this->render(
            'about.html.twig'
        );
    }
}