<?php

namespace App\Controller;

use App\Entity\Cinema;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('app/index.html.twig', [
            'cinemas' => $this->getDoctrine()->getRepository(Cinema::class)->findLastTenElements(),
        ]);
    }
}
