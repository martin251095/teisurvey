<?php

namespace App\Form;

use App\Entity\SurveyAnswer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SurveyAnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('userFistname')
          ->add('userLastname')
          ->add('score')
          ->add('total')
          ->add('survey')
          ->add('questions')
          ->add('answer');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
          [
            'data_class' => SurveyAnswer::class,
          ]
        );
    }
}
