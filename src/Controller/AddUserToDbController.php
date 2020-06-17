<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddUserToDbController extends AbstractController
{
    /**
     * @Route("/add/user/to/db", name="add_user_to_db")
     */
    public function index($email, $pasword)
    {
        return $this->render('add_user_to_db/index.html.twig', [
            'controller_name' => 'AddUserToDbController',
        ]);
    }
}
