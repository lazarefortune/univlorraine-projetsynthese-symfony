<?php

namespace App\Form;

use App\Entity\Evaluateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_eval')
            ->add('prenom_eval')
            ->add('email', EmailType::class,[
                'required' => true,
            ])
            ->add('login')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evaluateur::class,
        ]);
    }
}
