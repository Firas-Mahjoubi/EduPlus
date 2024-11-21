<?php
// src/Form/ApplicationType.php

namespace App\Form;

use App\Entity\Application;
use App\Entity\Club;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('club', ChoiceType::class, [
                'choices' => $options['clubs'],
                'choice_label' => function ($club) {
                    return $club->getNom();
                },
                'placeholder' => 'Choose a club'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit Application'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Application::class,
            'clubs' => [], // Pass clubs when rendering the form
        ]);
    }
}
