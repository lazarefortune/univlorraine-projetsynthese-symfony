<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class UserController extends AbstractController
{
    private function isPasswordValid(User $eval,string $plainPassword, string $password): bool
    {
        $encoder = $this->encoderFactory->getEncoder($eval);

        return $encoder->isPasswordValid($password, $plainPassword, null);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder){

        // $user =  new User();

        
        $user = $this->getUser();
     
        // dd($user);
        // $user->setNomEval();
        // $form = $this->createFormBuilder($user)
        //             ->add('nomEval')
        //             // ->add('prenomEval', TextType::class)
        //             // ->add('email', EmailType::class, [
            //             //     'required' => "false"
            //             // ])
            //             // ->add('password', PasswordType::class)
            //             // ->add('update', SubmitType::class, ['label' => 'Mettre à jour'])
            //             ->getForm();
            
            $form = $this->createForm(UserType::class, $user);
            
            $form->handleRequest($request);
            
            // dump($user);
            
            if ($form->isSubmitted() && $form->isValid()) {

                $match = $encoder->isPasswordValid($user, $request->request->get('oldPassword'));
                
                if ($match) {
                    if ($request->request->get('newPassword')) {
                        $passwordEncoded = $encoder->encodePassword($user, $request->request->get('newPassword'));
                        $user->setPassword($passwordEncoded);
                    }

                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    
                    $this->addFlash('success', 'Profil mis à jour avec succès');
                }else{
                    $this->addFlash('danger', 'Mot de passe actuel incorrect');
                }
                
                return $this->redirectToRoute('account');
            }
            
        return $this->render('user/index.html.twig', [
            'formUser' => $form->createView()
        ]);
    }
    
    /**
     * @IsGranted("ROLE_EVALUATOR")
     */
    public function index_eval(Request $request, UserPasswordEncoderInterface $encoder){

        // $user =  new User();

        
        $user = $this->getUser();
     
        // dd($user);
        // $user->setNomEval();
        // $form = $this->createFormBuilder($user)
        //             ->add('nomEval')
        //             // ->add('prenomEval', TextType::class)
        //             // ->add('email', EmailType::class, [
            //             //     'required' => "false"
            //             // ])
            //             // ->add('password', PasswordType::class)
            //             // ->add('update', SubmitType::class, ['label' => 'Mettre à jour'])
            //             ->getForm();
            
            $form = $this->createForm(UserType::class, $user);
            
            $form->handleRequest($request);
            
            // dump($user);
            
            if ($form->isSubmitted() && $form->isValid()) {

                $match = $encoder->isPasswordValid($user, $request->request->get('oldPassword'));
                
                if ($match) {
                    if ($request->request->get('newPassword')) {
                        $passwordEncoded = $encoder->encodePassword($user, $request->request->get('newPassword'));
                        $user->setPassword($passwordEncoded);
                    }

                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    
                    $this->addFlash('success', 'Profil mis à jour avec succès');
                }else{
                    $this->addFlash('danger', 'Mot de passe actuel incorrect');
                }
                
                return $this->redirectToRoute('account_eval');
            }
            
        return $this->render('evaluator/user/index.html.twig', [
            'formUser' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_ETUDIANT")
     * @Route("/etudiant/profil", name="etud_account")
     */
    public function index_etud(Request $request, UserPasswordEncoderInterface $encoder){

        // $user =  new User();

        
        $user = $this->getUser();
     
        // dd($user);
        // $user->setNomEval();
        // $form = $this->createFormBuilder($user)
        //             ->add('nomEval')
        //             // ->add('prenomEval', TextType::class)
        //             // ->add('email', EmailType::class, [
            //             //     'required' => "false"
            //             // ])
            //             // ->add('password', PasswordType::class)
            //             // ->add('update', SubmitType::class, ['label' => 'Mettre à jour'])
            //             ->getForm();
            
            $form = $this->createForm(UserType::class, $user);
            
            $form->handleRequest($request);
            
            // dump($user);
            
            if ($form->isSubmitted() && $form->isValid()) {

                $match = $encoder->isPasswordValid($user, $request->request->get('oldPassword'));
                
                if ($match) {
                    if ($request->request->get('newPassword')) {
                        $passwordEncoded = $encoder->encodePassword($user, $request->request->get('newPassword'));
                        $user->setPassword($passwordEncoded);
                    }

                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    
                    $this->addFlash('success', 'Profil mis à jour avec succès');
                }else{
                    $this->addFlash('danger', 'Mot de passe actuel incorrect');
                }
                
                return $this->redirectToRoute('etud_account');
            }
            
        return $this->render('etudiant/user/index.html.twig', [
            'formUser' => $form->createView()
        ]);
    }
    
}
