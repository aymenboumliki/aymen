<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Contrôleur principal du Portfolio - Aymen Boumliki
 */
class AymenController extends AbstractController
{
    /**
     * Page d'accueil : Présentation générale
     * Route : /
     */
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }

    /**
     * Page Parcours & Compétences
     * Route : /mon-parcours
     */
    #[Route('/mon-parcours', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('portfolio/cv.html.twig');
    }

    /**
     * Page Loisirs (Judo, Coaching, Création Web)
     * Route : /mes-loisirs
     */
    #[Route('/mes-loisirs', name: 'app_projects')]
    public function projects(): Response
    {
        // IMPORTANT : Vérifie que ton fichier s'appelle bien 'projet.html.twig' (sans S)
        // dans le dossier templates/portfolio/
        return $this->render('portfolio/projet.html.twig');
    }

    /**
     * Page Questionnaire d'avis pour les visiteurs
     * Route : /donner-mon-avis
     */
    #[Route('/donner-mon-avis', name: 'app_avis')]
    public function avis(): Response
    {
        return $this->render('portfolio/avis.html.twig');
    }
}