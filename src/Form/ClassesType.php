<?php

namespace App\Form;

use App\Entity\Classes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClassesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('label')
            ->add('level', IntegerType::class, [
                'label' => 'Niveau'
            ])
//            mapped => false car champ du formulaire non existant dans mon objet
//            ->add('slug', TextType::class, [
//                'label' => 'Slug',
//                'mapped' => false,
//            ])
        ;
        // $form = [1, 2, 3, 4, 5];
//         $form['fields'] = [
//             ['key_field_name' => 'entity_field_name'],
//             ['key_field_label' => 'entity_field_label'],
//             ['key_field_level' => 'entity_field_level'],
//         ];
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Classes::class,
        ]);
    }
}
