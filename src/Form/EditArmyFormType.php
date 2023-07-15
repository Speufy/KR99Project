<?php

namespace App\Form;

use App\Entity\Army;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditArmyFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('t1Cavalry')
            ->add('t2Cavalry')
            ->add('t3Cavalry')
            ->add('t4Cavalry')
            ->add('t5Cavalry')

            ->add('t1Infantry')
            ->add('t2Infantry')
            ->add('t3Infantry')
            ->add('t4Infantry')
            ->add('t5Infantry')

            ->add('t1Fly')
            ->add('t2Fly')
            ->add('t3Fly')
            ->add('t4Fly')
            ->add('t5Fly')

            ->add('t1Mage')
            ->add('t2Mage')
            ->add('t3Mage')
            ->add('t4Mage')
            ->add('t5Mage')


            ->add('t1Marksmen')
            ->add('t2Marksmen')
            ->add('t3Marksmen')
            ->add('t4Marksmen')
            ->add('t5Marksmen')
            ->add('editer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Army::class,
        ]);
    }
}
