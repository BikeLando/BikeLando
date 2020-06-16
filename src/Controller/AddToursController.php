<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddToursController extends AbstractController
{
    /**
     * @Route("/add/tours", name="add_tours")
     */
    public function index()
    {
        return $this->render('add_tours/index.html.twig', [
            'controller_name' => 'AddToursController',
        ]);
    }
}
