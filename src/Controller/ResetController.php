<?php
// Adam Hilaruk
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ResetController extends AbstractController
{
    /**
     * @Route("/reset", name="reset")
     */
    public function index()
    {
        return $this->render('reset/index.html.twig', [
            'controller_name' => 'ResetController',
        ]);
    }
}
