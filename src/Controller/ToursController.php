<?php

namespace App\Controller;

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
        $tours = ['Tour 1', 'Tour 2'];
        return $this->render('tours/index.html.twig', array('tours'=>$tours));
    }
}
