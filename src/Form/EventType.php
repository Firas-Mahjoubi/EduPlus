<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Club;
use App\Entity\Bloc;
use App\Entity\User;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Title',
                'attr' => ['placeholder' => 'Enter event title']
            ])
            ->add('datedebut', DateType::class, [
                'label' => 'Start Date',
                'widget' => 'single_text', // This makes it use an HTML5 date picker
            ])
            ->add('datefin', DateType::class, [
                'label' => 'End Date',
                'widget' => 'single_text',
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['placeholder' => 'Optional description']
            ])
            ->add('club', EntityType::class, [
                'class' => Club::class,
                'choice_label' => 'nom', // Assuming 'name' is a property of Club
                'label' => 'Club',
                'placeholder' => 'Select a club',
            ])
            ->add('bloc', EntityType::class, [
                'class' => Bloc::class,
                'choice_label' => 'name', // Assuming 'name' is a property of Bloc
                'label' => 'Bloc',
                'placeholder' => 'Select a bloc',
            ])
            ->add('participants', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nom', // Assuming 'username' is a property of User
                'multiple' => true, // Enables selection of multiple participants
                'expanded' => true, // Display checkboxes for multiple selection
                'label' => 'Participants',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
