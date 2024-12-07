<?php


namespace App\Form;

use App\Entity\Application;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ApplicationRType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('cv', FileType::class, [
            'label' => 'Télécharger votre CV',
            'required' => true,
            'mapped' => false, // This tells Symfony not to directly map this field to the entity
        ])
        
            ->add('motivationLetter', TextareaType::class, [
                'label' => 'Lettre de motivation',
                'required' => true,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Soumettre la candidature',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Application::class,
        ]);
    }
}
