<?php

namespace App\Form;

use App\Entity\Hotels;
use App\Entity\Services;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomh')
            ->add('categorie')
            ->add('adresse')
            ->add('email')
            ->add('telh')
            ->add('equipement')
            ->add('image',FileType::class, array('label'=>' '))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hotels::class,
        ]);
    }
}