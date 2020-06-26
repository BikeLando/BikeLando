<?php

namespace App\Controller;

use App\Entity\Tour;
use App\Entity\User;
use App\Entity\Note;
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
     * @Route("/tour/{id}/{user_id}", name="tour_show")
     */
    public function show($id, Request $request, $user_id) {
        if ($user_id=="unknown") {
            $tour = $this->getDoctrine()->getRepository(Tour::class)->find($id);
            $email = $tour->getUserId();
            $author = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $email]);
            return $this->render('tours/show.html.twig', array('tour'=>$tour, 'author'=>$author ));
        }

        $tour = $this->getDoctrine()->getRepository(Tour::class)->find($id);
        $email = $tour->getUserId();
        $author = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $email]);
        $form_note = $this->createFormBuilder()
            ->add('note', ChoiceType::class, [
                'attr' => ['class' => 'btn btn-warning dropdown-toggle w-25']
            ,
                'choices' => [
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
            ->add('addnote', SubmitType::class, array(
                'label' => 'Oceń',
                'attr' => array('class' => 'btn btn-dark mt-3')))
            ->getForm();

        $form_note->handleRequest($request);
        if ($form_note->isSubmitted() && $form_note->isValid()) {

            $note_object = new Note();
            $note = $form_note->get('note')->getData();
            $wynik = $this->getDoctrine()->getRepository(Note::class)->findBy(['tourId'=>$id, 'userId'=>$user_id]);
            if($wynik == null)
            {
                $note_object -> setValue($note);
                $note_object->setTourID($tour->getId());
                $note_object->setUserId($user_id);
                $number_of_notes = $tour->getNumberOfNotes();
                $average_note = $tour->getNote();

                $new_average_note = (($average_note*$number_of_notes)+$note)/($number_of_notes+1);

                $tour -> setNote($new_average_note);
                $tour -> setNumberOfNotes($number_of_notes+1);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($note_object);

                $entityManager->flush();

            }
            else
            {
                $this -> get('session')->getFlashBag()->add(
                    'warning',
                    'Nie możesz oceniać trasy dwa razy!'
                );
                return $this->redirectToRoute('index');
            }

        }
        return $this->render('tours/show.html.twig', array('tour'=>$tour, 'author'=>$author, 'form_note' => $form_note->createView()));
    }

}
