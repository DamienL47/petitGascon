<?php

namespace App\Form;

use App\Entity\Reservations;
use App\Entity\Status;
use App\Form\Extension\FlatpickrDateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Reservations1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('tel', TelType::class)
            ->add('nbPersonnes', NumberType::class, [
                'label' => 'Nombre de personnes'
            ])
            ->add('dateReservation', FlatpickrDateTimeType::class, [
                'label' => 'Date de réservation: ',
            ])
            ->add('contraintes', TextareaType::class, [
                'label' => 'Message',
                'attr' => ['placeholder' => 'Allergies, Régime alimentaire spécifique ...'],
                'required' => false,
                'empty_data' => '',
            ])
            ->add('status_id', EntityType::class, [
                'choice_value' => function (?Status $entity) {
                    return $entity ? $entity->getId() : '2';
                },
                'class' => Status::class,
                'choice_label' => 'titre',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservations::class,
        ]);
    }
}
