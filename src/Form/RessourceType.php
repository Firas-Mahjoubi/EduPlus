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
use Symfony\Component\Validator\Constraints as Assert;
class RessourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomRessource', TextType::class, [
                'label' => 'Ressource Name',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le nom de la ressource est obligatoire.',
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 100,
                        'minMessage' => 'Le nom de la ressource doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom de la ressource ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Matérielle' => 'materielle',
                    'Financière' => 'financiere',
                ],
                'label' => 'Ressource Type',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le type de la ressource est obligatoire.',
                    ]),
                ],
            ])
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité',
                'required' => false,  // Champ non obligatoire
                'attr' => ['class' => 'form-control', 'id' => 'quantite-field'],
                'constraints' => [
                    new Assert\GreaterThanOrEqual([
                        'value' => 0,
                        'message' => 'La quantité doit être un nombre positif.',
                    ]),
                ],
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant',
                'required' => false,  // Champ non obligatoire
                'attr' => ['class' => 'form-control', 'id' => 'montant-field'],
                'constraints' => [
                    new Assert\GreaterThanOrEqual([
                        'value' => 0,
                        'message' => 'Le montant doit être un nombre positif.',
                    ]),
                ],
            ])
            ->add('descriptionRessource', TextType::class, [
                'label' => 'Description',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La description est obligatoire.',
                    ]),
                    new Assert\Length([
                        'max' => 500,
                        'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image Ressource',
                'mapped' => false,  // Non lié directement à l'entité
                'required' => false,
                'attr' => ['accept' => 'image/*'],
                'constraints' => [
                    new Assert\Image([
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF).',
                    ]),
                    new Assert\File([
                        'maxSize' => '2M',
                        'maxSizeMessage' => 'La taille de l\'image ne doit pas dépasser 2 Mo.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ressource::class,  // L'entité liée au formulaire
        ]);
    }
}