<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppelProjetController extends AbstractController
{
    /**
     * @Route("/", name="appel_projet")
     */
    public function index(Request $request)
    {
        $salut = '';
        if($name = $request->query->get('Hello')){
            $salut = printf('<h1>Bonjour    %s</h1>', htmlspecialchars($name));
        }
        // return $this->render('appel_projet/index.html.twig', [
        //     'controller_name' => 'AppelProjetController',
        // ]);

        return new Response(<<<EOF
        <html>
            <body>
            <img src="/images/azobe_logo.png" />
            $salut
            <!--<img src="/images/Site_construction_ok.gif" />-->
            </body>
        </html>
        EOF);
    }
}
