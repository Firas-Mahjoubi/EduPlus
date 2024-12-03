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

class DemandeRessourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ressource', EntityType::class, [
                'class' => Ressource::class,
                'choice_label' => 'nomRessource', // Modifier selon le nom de votre champ dans Ressource
                'label' => 'Ressource'
            ])
            ->add('event', EntityType::class, [
                'class' => Event::class,
                'choice_label' => 'titre', 
                'placeholder' => 'Choisir un événement',  // Vérifiez que le placeholder ne permet pas de soumettre NULL
                'label' => 'Événement',
                'required' => true,  // Assurez-vous que le champ est requis
            ])
            
            
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité',
                'required' => false,
            ]);
    
            // Le champ 'dateDemande' ne doit pas être ajouté ici si vous l'avez déjà pré-rempli dans l'entité.
            // Cependant, si vous devez afficher la date dans le formulaire pour modification ou pour toute autre raison, vous pouvez l'ajouter.
            // ->add('dateDemande', DateType::class, [
            //     'widget' => 'single_text',
            //     'disabled' => true, // Pour empêcher l'utilisateur de la modifier si c'est une date générée automatiquement
            //     'label' => 'Date de la demande',
            // ])
          
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DemandeRessource::class,
        ]);
    }
}
