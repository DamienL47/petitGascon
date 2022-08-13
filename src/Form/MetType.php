<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Menu;
use App\Entity\Met;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('prix')
            ->add('description')
            ->add('menus', EntityType::class, [
                'class' => Menu::class,
                'label' => 'Menu',
                'choice_label' => 'titre',
                'mapped'=> false,
            ])
            ->add('category_id', EntityType::class,[
                'class' => Category::class,
                'label' => 'Categorie',
                'choice_label' => 'titre',
                //'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Met::class,
        ]);
    }
}
