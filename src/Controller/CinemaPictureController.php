<?php

namespace App\Controller;

use App\Entity\CinemaPicture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CinemaPictureController extends AbstractController
{
    /**
     * @Route("/cinema/picture", name="cinema_picture")
     */
    public function index()
    {
        return $this->render('cinema_picture/index.html.twig', [
            'controller_name' => 'CinemaPictureController',
        ]);
    }

    /**
     * Affiche un restaurant
     * @Route("/cinemaPicture/{cinemaPicture}", name="cinemaPicture_show",methods={"GET"}, requirements={"cinemaPicture"="\d+"})
     * @param CinemaPicture $cinemaPicture
     */
    public function show(CinemaPicture $cinemaPicture)
    {
    }

    /**
     * Affiche le formulaire de création des cinémas
     * @Route("/cinemaPicture/new", name="cinemaPicture_new", methods={"GET"})
     */
    public function new()
    {
    }

    /**
     * Traite la requête d'un formulaire de création d'un cinéma
     * @Route("/cinemaPicture", name="cinemaPicture_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'un cinéma (GET)
     * Traite le formulaire d'édition d'un cinéma (POST)
     * @Route("/cinemaPicture/{cinemaPicture}/edit", name="cinemaPicture_edit", methods={"GET", "POST"})
     * @param CinemaPicture $cinemaPicture
     */
    public function edit(CinemaPicture $cinemaPicture)
    {
    }

    /**
     * Supprime un cinemaPicture
     * @Route("cinemaPicture/{cinemaPicture}", name="cinemaPicture_delete", methods={"DELETE"})
     * @param CinemaPicture $cinemaPicture
     */
    public function delete(CinemaPicture $cinemaPicture)
    {
    }
}
