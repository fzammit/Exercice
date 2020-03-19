<?php

namespace App\Controller;

use App\Entity\Cinema;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CinemaController extends AbstractController
{
    /**
     * Affiche tous les restaurants
     * @Route("/cinemas", name="cinema_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('cinema/index.html.twig', [
            'controller_name' => 'CinemaController',
        ]);
    }


    /**
     * Affiche un restaurant
     * @Route("/cinema/{cinema}", name="cinema_show",methods={"GET"}, requirements={"cinema"="\d+"})
     * @param Cinema $cinema
     */
    public function show(Cinema $cinema)
    {

    }

    /**
     * Affiche le formulaire de création des cinémas
     * @Route("/cinema/new", name="cinema_new", methods={"GET"})
     */
    public function new()
    {

    }

    /**
     * Traite la requête d'un formulaire de création d'un cinéma
     * @Route("/cinema", name="cinema_create", methods={"POST"})
     */
    public function create()
    {

    }

    /**
     * Affiche le formulaire d'édition d'un cinéma (GET)
     * Traite le formulaire d'édition d'un cinéma (POST)
     * @Route("/cinema/{cinema}/edit", name="cinema_edit", methods={"GET", "POST"})
     * @param Cinema $cinema
     */
    public function edit(Cinema $cinema)
    {

    }

    public function delete(Cinema $cinema)
    {

    }
}
