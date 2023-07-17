<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
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
            ->add('grade', ChoiceType::class, [
                'label'=>false,
                'attr'=>['class'=>'form-select'],
                'choices'=>[
                    'R1'=>'R1',
                    'R2'=>'R2',
                    'R3'=>'R3',
                    'R4'=>'R4',
                    'R5'=>'R5'
                ]
            ])
            ->add('ally', ChoiceType::class, [
                'label'=>false,
                'attr'=>['class'=>'form-select'],
                'choices'=>[
                    'KC'=>'KC',
                    'KR'=>'KR',
                    'PW'=>'PW',
                    'BK'=>'BK',
                    'Other'=>'other'
                ]
            ])
            ->add('merit')
            ->add('timezone')
//            ->add('prime_time')
            ->add('country',CountryType::class)
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
