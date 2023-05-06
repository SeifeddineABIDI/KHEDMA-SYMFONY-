<?php

namespace App\Form;

use App\Entity\Tache;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class TacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'TODO' => 'TODO',
                    'DOING' => 'DOING',
                    'DONE' => 'DONE'
                ],
                'data' => 'TODO'
            ])
            ->add('description')
            ->add('priority')
            ->add('estimatedTime')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}
