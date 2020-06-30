<?php
// Aleksandra Rawicz Adam Hilaruk Małgorzata Wieteska
namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;


class EditController extends AbstractController
{
    /**
     * @Route("/edit/{id}", name="edit")
     * @Method({"GET","POST"})
     */
    public function index(Request $request,UserPasswordEncoderInterface $passwordEncoder, $id): Response
    {
        $repo = $this->getDoctrine()->getManager();
        $user = $repo->getRepository(User::class)->findOneBy(['email'=>$id]);
        if(!$user) {
            throw new ResourceNotFoundException('Nie ma usera');
        }
        $form = $this->createFormBuilder()
            ->add('password', PasswordType::class, array('attr'=>array('class'=>'form-control')))
            ->add('password2', PasswordType::class, array('attr'=>array('class'=>'form-control')))
            ->add('save', SubmitType::class, array('label'=>'Zapisz','attr'=>array('class'=>'form-control')))
            ->getForm();
        $form ->handleRequest($request);
        $pass = $form->get('password')->getData();
        $pass2 = $form->get('password2')->getData();
        if ($form->isSubmitted()&&$form->isValid()&&$pass==$pass2) {
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $pass
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('index');
        }
        $this -> get('session')->getFlashBag()->add(
            'password_error',
            'Podane hasła nie są takie same'
        );
        return $this->render('edit/index.html.twig', array('form'=>$form->createView()));
    }
}
