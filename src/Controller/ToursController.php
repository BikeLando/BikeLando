<?php

namespace App\Controller;

use App\Entity\Tour;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ToursController extends AbstractController
{
    /**
     * @Route("/tours", name="tours")
     * Method({"GET", "POST"})
     */
    public function index(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('diff', ChoiceType::class,
                ['choices' => [
                    'Wszystkie' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                ]])
            ->add('region', ChoiceType::class, [
                'choices' => [
                    'Wszystkie' => 0,
                    'dolnośląskie' => 'dolnośląskie',
                    'kujawsko-pomorskie' => 'kujawsko-pomorskie',
                    'lubelskie' => 'lubelskie',
                    'lubuskie' => 'lubuskie',
                    'łódzkie' => 'łódzkie',
                    'małopolskie' => 'małopolskie',
                    'mazowieckie' => 'mazowieckie',
                    'opolskie' => 'opolskie',
                    'podkarpackie' => 'podkarpackie',
                    'podlaskie' => 'podlaskie',
                    'pomorskie' => 'pomorskie',
                    'śląskie' => 'śląskie',
                    'świętokrzyskie' => 'świętokrzyskie',
                    'warmińsko-mazurskie' => 'warmińsko-mazurskie',
                    'wielkopolskie' => 'wielkopolskie',
                    'zachodniopomorskie' => 'zachodniopomorskie',
                ]
            ])
            ->add('note', ChoiceType::class, [
                'choices' => [
                    'Wszystkie' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10,
                ]])
            ->add('save', SubmitType::class, array(
                'label' => 'Wyszukaj',
                'attr' => array('class' => 'btn btn-primary mt-3')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $note = $form->get('note')->getData();
            $diff = $form->get('diff')->getData();
            $region = $form->get('region')->getData();
            $tab=[];
            if ($note != '0' ) {
                $tab = ['note'=>$note];
            }
            if ($region != '0') {
                    $tab = ['region'=>$region];
            }
            if ($diff != '0') {
                    $tab=['difficulty'=>$diff];
            }

            if(count($tab)>0) {
                $tours = $this->getDoctrine()->getRepository(Tour::class)->findBy($tab);
            }
            else
            {
                $tours = $this->getDoctrine()->getRepository(Tour::class)->findAll();
            }


            return $this->render('tours/index.html.twig', array(
                'form' => $form->createView(),
                'tours' => $tours));

        } else {
            $tours = $this->getDoctrine()->getRepository(Tour::class)->findAll();
            return $this->render('tours/index.html.twig', array(
                'form' => $form->createView(),
                'tours' => $tours));

        }
    }

    /**
     * @Route("/tour/{id}", name="tour_show")
     */
    public function show($id) {

        $tour = $this->getDoctrine()->getRepository(Tour::class)->find($id);
        $email = $tour->getUserId();
        $author = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $email]);

        return $this->render('tours/show.html.twig', array('tour'=>$tour, 'author'=>$author));
    }

}
