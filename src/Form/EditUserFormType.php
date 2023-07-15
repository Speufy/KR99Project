<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class EditUserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('ingame_id', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'ingame ID'
                )
            ))
            ->add('power')
            ->add('grade')
            ->add('ally')
            ->add('merit')
            ->add('timezone')
//            ->add('prime_time')
            ->add('country')
            ->add('username', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Pseudo'
                )
            ))
            ->add('editer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
