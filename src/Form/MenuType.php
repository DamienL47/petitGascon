<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Menu;
use App\Entity\Met;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('is_published', CheckboxType::class, [
                'compound' => false,
                'label'    => 'Publier',
                'required' => false,
            ])
            ->add('titre')
            ->add('prix')
            ->add('description')
            ->add('image', FileType::class, [
                'label' => 'Image',
                'required' => false,
                'mapped' => false
            ])
            ->add('id_met', EntityType::class, [
                'class' => Met::class,
                'label' => 'Plat',
                'choice_label' => 'titre',
                'multiple' => false,
                'required' => false,
                'mapped'=> false,
            ])
            ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
