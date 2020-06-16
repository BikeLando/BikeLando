<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ToursController extends AbstractController
{
    /**
     * @Route("/tours", name="tours")
     */
    public function show()
    {
        return $this->render('tours.html.twig');
    }
}
