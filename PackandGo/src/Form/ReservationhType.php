<?php

namespace App\Form;

use App\Entity\Reservationh;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationhType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dated')
            ->add('datef')
            ->add('etatService', ChoiceType::class, [
                    'choices'  => [
                    'None' => 0,
                    'All inclusive' => 1,
                    'demi pension' => 2,
                ],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservationh::class,
        ]);
    }
}
