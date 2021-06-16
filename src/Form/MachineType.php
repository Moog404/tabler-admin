<?php

namespace App\Form;

use App\Entity\Machine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MachineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class, [
                'label' => 'Nom',
                'label_attr' => ['class' => 'form-label'],
                'required' => true,
            ])
            ->add('title',TextType::class, [
                'label' => 'Name',
                'label_attr' => ['class' => 'form-label'],
                'required' => false,
            ])
            ->add('isOnline',CheckboxType::class, [
                'row_attr' => ['class' => 'form-switch'],
                'label' => 'en ligne',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Machine::class,
        ]);
    }
}
