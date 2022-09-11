<?php

namespace App\Form\Extension;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class FlatpickrDateTimeType
 * @package App\Form\Extension
 */
class FlatpickrDateTimeType extends AbstractType
{

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver  $resolver)
    {
        $resolver -> setDefaults (array(
            'widget' => 'single_text' ,
            'attr' => array(
            'placeholder' => 'Sélectionnez une date...' ,
            'class' => " flatpickr datetime ",
            ),
        ));
    }

    /**
     * @retour mixed
     */
    public function getParent()
    {
        return  DateTimeType::class;
    }
}