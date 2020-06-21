<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Annotation\MaxDepth;

class EditController extends AbstractController
{
    /**
     * @Route("/edit/{id}", name="edit")
     * @Method({"GET","POST"})
     */
    public function index(Request $request,$id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $form = $this->createFormBuilder($user)
            ->add('password', PasswordType::class, array('attr'=>array('class'=>'form-control')))
            ->add('password2', PasswordType::class, array('attr'=>array('class'=>'form-control')))
            ->add('save', SubmitType::class, array('label'=>'Save','attr'=>array('class'=>'form-control')))
            ->getForm();
        $form ->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager -> flush();
            return $this->redirectToRoute('account');
        }
        return $this->render('edit/index.html.twig', array('form'=>$form->createView()));
    }
}
