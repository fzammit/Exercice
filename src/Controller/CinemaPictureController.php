<?php

namespace App\Controller;

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
}
