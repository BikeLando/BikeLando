<?php
// Aleksandra Rawicz
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Tour;

class AddToursController extends AbstractController
{
    /**
     * @Route("/add/tours/{user}", name="add_tours")
     * Method({"GET", "POST"})
     */
    public function index(Request $request, $user)
    {
        $tour = new Tour();
        $tour ->setUserId($user);
        $tour ->setNumberOfNotes(1);

        $form = $this->createFormBuilder($tour)
            ->add('name', TextType::class, array('attr' =>
                array('class'=>'form-control')))
            ->add('length', NumberType::class,  array('scale' => 5,'attr' =>
                array('class'=>'form-control'),) )
            ->add('linkToMap', TextType::class, array('attr' =>
                array('class'=>'form-control')))
            ->add('difficulty', ChoiceType::class,
            ['choices'=>[
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
                    'dolnośląskie' => 'dolnośląskie',
                    'kujawsko-pomorskie' => 'kujawsko-pomorskie',
                    'lubelskie' => 'lubelskie',
                    'lubuskie' => 'lubuskie',
                    'łódzkie'=> 'łódzkie',
                    'małopolskie'=>'małopolskie',
                    'mazowieckie'=>'mazowieckie',
                    'opolskie'=>'opolskie',
                    'podkarpackie'=>'podkarpackie',
                    'podlaskie'=>'podlaskie',
                    'pomorskie'=>'pomorskie',
                    'śląskie'=>'śląskie',
                    'świętokrzyskie'=>'świętokrzyskie',
                    'warmińsko-mazurskie'=>'warmińsko-mazurskie',
                    'wielkopolskie'=>'wielkopolskie',
                    'zachodniopomorskie'=>'zachodniopomorskie',
                ]
            ])
            ->add('description', TextareaType::class, array(
                'required' => false,
                'attr' => array('class'=>'form-control')))
            ->add('note', ChoiceType::class, ['choices'=>[
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

            return $this->redirectToRoute('index');
        }


        return $this->render('add_tours/index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}