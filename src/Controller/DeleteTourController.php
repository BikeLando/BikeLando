<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Tour;
use App\Entity\User;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class DeleteTourController extends AbstractController
{
    /**
     * @Route("/delete/tour/{idTour}", name="delete_tour")
     */
    public function index($idTour)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $TourRepository = $entityManager->getRepository(Tour::class);
        $tour = $TourRepository->find($idTour);
        if(is_null($tour)){
            throw $this->createNotFoundException('No Tour Found for id: ' . $idTour);
        }
        $entityManager->remove($tour);
        $entityManager->flush();
        $this -> get('session')->getFlashBag()->add(
            'notice',
            'Pomyślnie usunięto trasę!'
        );
        return $this->redirectToRoute('index');
    }
}
