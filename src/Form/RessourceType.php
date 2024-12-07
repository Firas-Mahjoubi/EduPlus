<?php
namespace App\Form;

use App\Entity\Ressource;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RessourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomRessource', TextType::class, [
                'label' => 'Nom de la ressource',
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Matérielle' => 'materielle',
                    'Financière' => 'financiere',
                ],
                'label' => 'Type de ressource',
            ])
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité',
                'required' => false,  // Field is not required by default
                'attr' => ['class' => 'form-control', 'id' => 'quantite-field'],  // Add an id for JS
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant',
                'required' => false,  // Field is not required by default
                'attr' => ['class' => 'form-control', 'id' => 'montant-field'],  // Add an id for JS
            ])
            ->add('descriptionRessource', TextType::class, [
                'label' => 'Description',
            ])
            ->add('image', FileType::class, [
                'label' => 'Image de la ressource',
                'mapped' => false,  // Not directly mapped to the entity
                'required' => false,
                'attr' => ['accept' => 'image/*'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ressource::class,  // Assuming you have an entity called Ressource
        ]);
    }
}