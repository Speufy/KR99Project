<?php

namespace App\Form;

use App\Entity\PlayTimeSchedule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScheduleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('hour1',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour2',CheckboxType::class, [
        'required' => false,
    ])
            ->add('hour3',CheckboxType::class, [
        'required' => false,
    ])
            ->add('hour4',CheckboxType::class, [
        'required' => false,
    ])
            ->add('hour5',CheckboxType::class, [
        'required' => false,
    ])
            ->add('hour6',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour7',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour8',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour9',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour10',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour11',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour12',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour13',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour14',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour15',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour16',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour17',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour18',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour19',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour20',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour21',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour22',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour23',CheckboxType::class, [
                'required' => false,
            ])
            ->add('hour24',CheckboxType::class, [
                'required' => false,
            ])
            ->add('edit',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PlayTimeSchedule::class,
        ]);
    }
}
