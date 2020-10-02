<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppelProjetController extends AbstractController
{
    /**
     * @Route("/appel/projet", name="appel_projet")
     */
    public function index()
    {
        
        return $this->render('appel_projet/index.html.twig', [
            'controller_name' => 'AppelProjetController',
        ]);
    }
}
