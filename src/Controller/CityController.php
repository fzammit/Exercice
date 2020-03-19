<?php

namespace App\Controller;

use App\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * @Route("/city", name="city")
     */
    public function index()
    {
        return $this->render('city/index.html.twig', [
            'controller_name' => 'CityController',
        ]);
    }

    /**
     * Affiche un restaurant
     * @Route("/city/{city}", name="city_show",methods={"GET"}, requirements={"city"="\d+"})
     * @param City $city
     */
    public function show(City $city)
    {
    }

    /**
     * Affiche le formulaire de création des cinémas
     * @Route("/city/new", name="city_new", methods={"GET"})
     */
    public function new()
    {
    }

    /**
     * Traite la requête d'un formulaire de création d'un cinéma
     * @Route("/city", name="city_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'un cinéma (GET)
     * Traite le formulaire d'édition d'un cinéma (POST)
     * @Route("/city/{city}/edit", name="city_edit", methods={"GET", "POST"})
     * @param City $city
     */
    public function edit(City $city)
    {
    }

    /**
     * Supprime un city
     * @Route("city/{city}", name="city_delete", methods={"DELETE"})
     * @param City $city
     */
    public function delete(City $city)
    {
    }
}
