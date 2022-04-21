<?php

namespace App\Form;

use App\Entity\Guide;
use App\Entity\Transport;
use Doctrine\ORM\Persisters\Entity\SingleTablePersister;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransportFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type')
            ->add('nomagence')
            ->add('prix')
            ->add('duree')
            ->add('destination')
            ->add('guideid' , EntityType::class , [
                'class' =>Guide::class
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }
}
