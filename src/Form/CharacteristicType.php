<?php

namespace App\Form;

use App\Entity\Characteristic;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
            ->add('content',CKEditorType::class, [
                'label' => 'Description',
                'label_attr' => ['class' => 'form-label'],
//                'attr' => [' data-bs-toggle' => 'autosize'],
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
