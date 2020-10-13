<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\AppelProjet;
use App\Entity\Edito;
use App\Entity\Article;
use App\Entity\Evenement;
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
        return $this->render('bundles/EasyAdminBundle/welcome.html.twig', ['user']);
    }

    /**Costomise user interface */
    
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
            MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class),
            MenuItem::linkToCrud('Appel à projet', 'fas fa-bullhorn', AppelProjet::class),
            MenuItem::linkToCrud('Editos', 'far fa-newspaper', Edito::class),
            MenuItem::linkToCrud('Articles', 'fas fa-blog', Article::class),
            MenuItem::linkToCrud('Evènement', 'far fa-calendar-plus', Evenement::class)
        ];
    }
}
