<?php

namespace App\Controller;

use App\Entity\Tour;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserToursController extends AbstractController
{
    /**
     * @Route("/user/tours/{user}", name="user_tours")
     */
    public function index($user)
    {

        $tours2 = $this->getDoctrine()->getRepository(Tour::class)->findBy(['userId' => $user]);
        return $this->render('user_tours/index.html.twig', array(

            'tours2' => $tours2));

    }
}
