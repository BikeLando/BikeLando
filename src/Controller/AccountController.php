<?php
// Aleksandra Rawicz
namespace App\Controller;

use App\Entity\Note;
use App\Entity\Tour;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AccountController extends AbstractController
{
    /**
     * @Route("/account/{user}", name="account")
     */
    public function index($user)
    {
        $us = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $user]);
        if ($us == null)
        {
            $this -> get('session')->getFlashBag()->add(
                'check',
                'Nie ma takiego konta'
            );
            return $this->redirectToRoute('app_register');
        }
        $statistic = $this->getDoctrine()->getRepository(Tour::class)->findBy(['userId' => $user]);
        $statistic_note = $this->getDoctrine()->getRepository(Note::class)->findBy(['userId' => $user]);
        if ($statistic!=null && $statistic_note!=null) {
            $sum_km = $us->sum($statistic);
            $earthEncirclement = $us->earthEncirclement($statistic);
            $number1 = $us->number($statistic);
            $number2 =  $us->number($statistic_note);
            $average = $us->average($statistic);

            return $this->render('account/index.html.twig', [
                'sum_km' => $sum_km,
                'ob_ziemi' => $earthEncirclement,
                'ile_dodano' => $number1,
                'ile_ocen' => $number2,
                'srednia' => $average

            ]);
        }
        else
        {
            return $this->render('account/index.html.twig', [
                'sum_km' => 0,
                'ob_ziemi' => 0,
                'ile_dodano' => 0,
                'ile_ocen' => 0,
                'srednia' => 0

            ]);
        }
    }
}