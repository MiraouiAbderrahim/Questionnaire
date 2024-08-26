<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionnaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        switch ($options['step']) {
            case 1:
                $builder
                    ->add('q1', ChoiceType::class, [
                        'choices' => [
                            'Maison' => 'Maison',
                            'Appartement' => 'Appartement',
                        ],
                        'label' => 'Vous vivez dans ?',
                    ]);
                break;

            case 2:
                $builder
                    ->add('q2', ChoiceType::class, [
                        'choices' => [
                            'VMC Simple flux' => 'VMC Simple flux',
                            'VMC double flux' => 'VMC double flux',
                            'Extracteur' => 'Extracteur',
                            'Je n’en ai pas' => 'Je n’en ai pas',
                            'Je ne sais pas' => 'Je ne sais pas',
                        ],
                        'label' => 'Quel type de système de ventilation utilisez-vous actuellement ?',
                    ]);
                break;

            case 3:
                $builder
                    ->add('q3', ChoiceType::class, [
                        'choices' => [
                            'Oui' => 'Oui',
                            'Non' => 'Non',
                        ],
                        'label' => 'Entretenez-vous votre système de ventilation tous les ans ?',
                    ]);
                break;

            case 4:
                $builder
                    ->add('q4', ChoiceType::class, [
                        'choices' => [
                            'Oui' => 'Oui',
                            'Non' => 'Non',
                        ],
                        'label' => 'Avez-vous remarqué des problèmes d\'humidité, de mauvaises odeurs persistantes ou de condensation excessive ?',
                    ]);
                break;

            case 5:
                $builder
                    ->add('q5_1', ChoiceType::class, [
                        'choices' => [
                            'Oui' => 'Oui',
                            'Non' => 'Non',
                        ],
                        'label' => 'Est-ce que vous fumez à l\'intérieur de votre domicile ?',
                    ])
                    ->add('q5_2', ChoiceType::class, [
                        'choices' => [
                            'Oui' => 'Oui',
                            'Non' => 'Non',
                        ],
                        'label' => 'Avez-vous des animaux de compagnie à l\'intérieur de votre domicile ?',
                    ])
                    ->add('q5_3', ChoiceType::class, [
                        'choices' => [
                            'Oui' => 'Oui',
                            'Non' => 'Non',
                        ],
                        'label' => 'Chauffez-vous votre logement avec un poêle à bois, insert bois, ou cheminée ?',
                    ])
                    ->add('q5_4', ChoiceType::class, [
                        'choices' => [
                            'Oui' => 'Oui',
                            'Non' => 'Non',
                        ],
                        'label' => 'Avez-vous beaucoup de tapis, de moquettes ou de rideaux qui pourraient piéger la poussière et les allergènes ?',
                    ])
                    ->add('q5_5', ChoiceType::class, [
                        'choices' => [
                            'Oui' => 'Oui',
                            'Non' => 'Non',
                        ],
                        'label' => 'Avez-vous une hotte de cuisine que vous allumez à chaque fois que vous cuisinez ?',
                    ]);
                break;
        }

        $builder->add('submit', SubmitType::class, ['label' => 'Continuer']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'step' => 1,
        ]);
    }
}
