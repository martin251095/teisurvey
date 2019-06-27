<?php

namespace App\Form;

use App\Entity\Answer;
use App\Entity\Question;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnswerType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('answer', TextType::class, $this->getConfiguration('Answer', 'Answer'))
          ->add('answerFr', TextType::class, $this->getConfiguration('Answer FR', 'Answer in French', ['required' => false]))
          ->add('answerNl', TextType::class, $this->getConfiguration('Answer NL', 'Answer in Dutch', ['required' => false]))
          ->add('isCorrect')
          ->add('point', NumberType::class, $this->getConfiguration('Point', 'Score of this answer'))
          ->add('weight', NumberType::class, $this->getConfiguration('Weight', 'Weight of this answer'))
          ->add(
            'question',
            EntityType::class,
            [
              'class' => Question::class,
              'choice_label' => 'question',
            ]
          );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
          [
            'data_class' => Answer::class,
          ]
        );
    }
}
