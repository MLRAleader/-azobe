<?php

namespace App\Controller\Admin;

use App\Entity\AppelProjet;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }


    /**Configuration de base */
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Azobe');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        // // yield MenuItem::linkToCrud('The Label', 'icon class', EntityClass::class);
        return [
            MenuItem::section('Utilisateurs', 'user', User::class),
            MenuItem::section('Appel à projet', 'AppelProjet', AppelProjet::class),
            MenuItem::section('Editos', 'edito', Edito::class),
            MenuItem::section('Articles', 'article', Article::class),
            MenuItem::section('Ressources', 'ressource', Ressource::class),
        ];
    }
}
