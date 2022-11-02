<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route(path: '/', name: 'welcome')]
    public function index(): Response
    {
        return $this->render(
            view: 'welcome.html.twig'
        );
    }
}