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
        $statistic = $this->getDoctrine()->getRepository(Tour::class)->findBy(['userId' => $user]);
        if ($statistic == null)
        {
            $this -> get('session')->getFlashBag()->add(
                'check',
                'Nie ma takiego konta'
            );
            return $this->redirectToRoute('index');
        }
        $statistic_note = $this->getDoctrine()->getRepository(Note::class)->findBy(['userId' => $user]);
        $sum_km=0;
        $sum_ocen = 0;
        $i = 0;
        while ($i < count($statistic))
        {
            $sum_km += $statistic[$i]->getLength();
            $sum_ocen += $statistic[$i]->getNote();
            $i++;
        }
        $okr_ziemi=$sum_km/40075;
        $ile_dodano = count($statistic);
        $ile_ocen = count($statistic_note);
        $srednia_ocen = $sum_ocen/count($statistic);

        return $this->render('account/index.html.twig', [
            'sum_km' => $sum_km,
            'ob_ziemi' => $okr_ziemi,
            'ile_dodano' => $ile_dodano,
            'ile_ocen' => $ile_ocen,
            'srednia' => $srednia_ocen

        ]);
    }
}