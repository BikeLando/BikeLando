<?php
// Adam Hilaruk
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tour;

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
