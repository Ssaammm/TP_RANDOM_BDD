<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomBDDController extends AbstractController
{
    /**
     * @Route("/random_bdd", name="app_random_bdd")
     */
    public function index(): Response
    {
        return $this->render('random_bdd/index.html.twig', [
            'controller_name' => 'RandomBDDController',
        ]);
    }

    /**
     * @Route("/random_bdd/read", name="affichage")
     */
    public function affichage()
    {
        return $this->render('random_bdd/affiche.html.twig', [
            'titre' => 'BIENVENUE LES AMIS !!'
        ]);
    }

    /**
     * @Route("/random/create", name="create")
     */
    public function ajouter()
    {
        return $this->render('random_bdd/ajouter.html.twig');
    }
    /**
     * @Route("/random/update", name="create")
     */
    public function maj()
    {
        return $this->render('random_bdd/maj.html.twig');
    }
     /**
     * @Route("/random/delete", name="create")
     */
    public function supprimer()
    {
        return $this->render('random_bdd/supprimer.html.twig');
    }   

}
