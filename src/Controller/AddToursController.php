<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Tour;

class AddToursController extends AbstractController
{
    /**
     * @Route("/add/tours", name="add_tours")
     * Method({"GET", "POST"})
     */
    public function index(Request $request)
    {
        $logged = "zalogowany";
        $tour = new Tour();
        $tour ->setUserId($logged);
        $tour ->setNumberOfNotes(1);

        $form = $this->createFormBuilder($tour)
            ->add('name', TextType::class, array('attr' =>
                array('class'=>'form-control')))
            ->add('length', TextType::class, array('attr' =>
                array('class'=>'form-control')))
            ->add('linkToMap', TextType::class, array('attr' =>
                array('class'=>'form-control')))
            ->add('difficulty', TextType::class, array('attr' =>
                array('class'=>'form-control')))
            ->add('region', TextType::class, array('attr' =>
                array('class'=>'form-control')))
            ->add('description', TextareaType::class, array(
                'required' => false,
                'attr' => array('class'=>'form-control')))
            ->add('note', TextType::class, array('attr' =>
                array('class'=>'form-control')))
            ->add('save', SubmitType::class, array(
                'label' => 'Create',
                'attr' => array('class'=>'btn btn-primary mt-3')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $tour = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tour);
            $entityManager->flush();

            return $this->redirectToRoute('user_tours');
        }


        return $this->render('add_tours/index.html.twig', array(
            'form' => $form->createView()
        ));
    }}