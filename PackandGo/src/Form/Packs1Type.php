<?php

namespace App\Form;

use App\Entity\Packs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Packs1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomPack')
            ->add('texte')
            ->add('service')
            ->add('guide')
            ->add('destination')
            ->add('budgetPack')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Packs::class,
        ]);
    }
}
