<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\Extension\FlatpickrDateTimeType;

/**
 * Class ReservationsType
 * @package App\Form
 */
class ReservationsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
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
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Reservations',
        ));
    }
}
