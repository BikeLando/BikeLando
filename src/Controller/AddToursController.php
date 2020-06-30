<?php
// Aleksandra Rawicz
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Tour;
use App\Form\AddToursFormType;

class AddToursController extends AbstractController
{
    /**
     * @Route("/add/tours/{user}", name="add_tours")
     * Method({"GET", "POST"})
     */
    public function index(Request $request, $user): Response
    {
        $tour = new Tour();
        $tour ->setUserId($user);
        $tour ->setNumberOfNotes(1);
        $form = $this->createForm(AddToursFormType::class, $tour);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $tour = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tour);
            $entityManager->flush();


            $this -> get('session')->getFlashBag()->add(
                'notice',
                'Dodano trase!'
            );
            return $this->redirectToRoute('index');
        }


        return $this->render('add_tours/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}