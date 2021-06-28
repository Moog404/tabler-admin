<?php

namespace App\Form;

use App\Entity\Characteristic;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CharacteristicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, [
                'label' => 'Titre',
                'label_attr' => ['class' => 'form-label'],
                'required' => false,
            ])
            ->add('content',TextType::class, [
                'label' => 'Description',
                'label_attr' => ['class' => 'form-label'],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Characteristic::class,
        ]);
    }
}
