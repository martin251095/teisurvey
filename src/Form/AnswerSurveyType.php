<?php

namespace App\Form;

use App\Entity\AnswerSurvey;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnswerSurveyType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('answer', TextType::class, $this->getConfiguration('Answer', 'Answer'))
            ->add('answerFr', TextType::class, $this->getConfiguration('Answer FR', 'Answer in French', ['required' => false]))
            ->add('answerNl', TextType::class, $this->getConfiguration('Answer NL', 'Answer in Dutch', ['required' => false]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AnswerSurvey::class,
        ]);
    }
}
