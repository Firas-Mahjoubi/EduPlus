<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Club;
use App\Entity\Bloc;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Title',
                'attr' => ['placeholder' => 'Enter event title']
            ])
            ->add('hasParticipantLimit', CheckboxType::class, [
                'label' => 'Limit Number of Participants',
                'required' => false,
                'mapped' => true,
                'attr' => [
                    'class' => 'form-check-input',
                    'id' => 'has-limit-checkbox',
                    'onclick' => 'toggleMaxParticipants()',  // Inline handler
                ],
            ])
            
            
    
            ->add('maxParticipants', IntegerType::class, [
                'label' => 'Max Participants',
                'required' => false,
                'mapped' => true,
                'attr' => ['placeholder' => 'Enter the maximum number of participants'],
            ])
            ->add('datedebut', DateType::class, [
                'label' => 'Start Date',
                'widget' => 'single_text',
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
                'choice_label' => 'nom',
                'label' => 'Club',
                'placeholder' => 'Select a club',
            ])
            ->add('bloc', EntityType::class, [
                'class' => Bloc::class,
                'choice_label' => 'name',
                'label' => 'Bloc',
                'placeholder' => 'Select a bloc',
            ])
            ->add('image', FileType::class, [
                'label' => 'Event Image (Optional)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control-file'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
