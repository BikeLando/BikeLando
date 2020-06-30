<?php
// Adam Hilaruk
namespace App\Form;

use App\Entity\Tour;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class AddToursFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                'attr' => array('class'=>'btn btn-primary mt-3')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tour::class,
        ]);
    }
}
