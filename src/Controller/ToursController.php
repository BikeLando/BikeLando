<?php

namespace App\Controller;

use App\Entity\Tour;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToursController extends AbstractController
{
    /**
     * @Route("/tours", name="tours")
     */
    public function index()
    {
        $tours = $this->getDoctrine()->getRepository(Tour::class)->findAll();
        return $this->render('tours/index.html.twig', array('tours'=>$tours));
    }
    /**
     * @Route("/tour/{id}", name="tour_show")
     */
    public function show($id) {
        $tour = $this->getDoctrine()->getRepository(Tour::class)->find($id);
        return $this->render('tours/show.html.twig', array('tour'=>$tour));
    }
}
