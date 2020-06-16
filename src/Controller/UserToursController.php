<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserToursController extends AbstractController
{
    /**
     * @Route("/user/tours", name="user_tours")
     */
    public function index()
    {
        return $this->render('user_tours/index.html.twig', [
            'controller_name' => 'UserToursController',
        ]);
    }
}
