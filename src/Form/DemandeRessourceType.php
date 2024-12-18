<?php
namespace App\Form;

use App\Entity\DemandeRessource;
use App\Entity\Ressource;
use App\Entity\Event;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints as Assert;

class DemandeRessourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ressource', EntityType::class, [
                'class' => Ressource::class,
                'choice_label' => 'nomRessource',
                'label' => 'Ressource',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez sélectionner une ressource.',
                    ]),
                ],
            ])
            ->add('event', EntityType::class, [
                'class' => Event::class,
                'choice_label' => 'titre', 
                'placeholder' => 'Choisir un événement',
                'label' => 'Événement',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez sélectionner un événement.',
                    ]),
                ],
            ])
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité',
                'required' => true,
                'constraints' => [
                    new Assert\PositiveOrZero([
                        'message' => 'La quantité doit être un nombre positif.',
                    ]),
                    new Assert\Type([
                        'type' => 'numeric',
                        'message' => 'La quantité doit être un nombre.',
                    ]),
                ],
            ])
            // Si vous voulez ajouter une date de demande, décommentez la ligne suivante
            // ->add('dateDemande', DateType::class, [
            //     'widget' => 'single_text',
            //     'disabled' => true,
            //     'label' => 'Date de la demande',
            //     'constraints' => [
            //         new Assert\Date([
            //             'message' => 'La date doit être au format valide.',
            //         ]),
            //     ],
            // ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DemandeRessource::class,
        ]);
    }}