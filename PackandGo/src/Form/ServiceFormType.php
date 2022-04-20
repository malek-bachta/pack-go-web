<?php

namespace App\Form;

use App\Entity\Hotels;
use App\Entity\Services;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('formule')
            ->add('prix')
            ->add('sejours')
            ->add('activite')
            ->add('etat')
            ->add('id_hotel', EntityType::class, [
                'class' => Hotels::class,
                'choice_label' => 'nomH', ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Services::class,
        ]);
    }
}
