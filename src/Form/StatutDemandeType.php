<?php

// src/Form/StatutDemandeType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\DemandeRessource;

class StatutDemandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('statutDemande', ChoiceType::class, [
            'choices' => [
                'En attente' => 'En attente',
                'Accepté' => 'Accepté',
                'Refusé' => 'Refusé',
            ],
            'label' => 'Statut de la demande',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DemandeRessource::class, // Specify the entity if applicable
        ]);
    }
}

