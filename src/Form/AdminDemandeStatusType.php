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
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdminDemandeStatusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Utilisez 'statutDemande' au lieu de 'status'
            ->add('statutDemande', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'en_attente',
                    'Approuvé' => 'approuve',
                    'Refusé' => 'refuse',
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Mettre à jour',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DemandeRessource::class, // Assurez-vous que la classe est correcte
        ]);
    }
}