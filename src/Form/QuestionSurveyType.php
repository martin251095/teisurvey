<?php

namespace App\Form;

use App\Entity\QuestionSurvey;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class QuestionSurveyType extends ApplicationType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('question', TextType::class, $this->getConfiguration('Statement', 'Statement of the question'))
      ->add(
        'questionFr',
        TextType::class,
        $this->getConfiguration('Statement FR', 'Statement of the question in French', ['required' => false])
      )
      ->add(
        'questionNl',
        TextType::class,
        $this->getConfiguration('Statement NL', 'Statement of the question in Dutch', ['required' => false])
      )
      ->add(
        'longQuestion',
        CKEditorType::class,
        $this->getConfiguration(
          'Long statement',
          'Long statement of the question',
          ['required' => false]
        )
      )
      ->add(
        'longQuestionFr',
        CKEditorType::class,
        $this->getConfiguration(
          'Long statement FR',
          'Long statement of the question in French',
          ['required' => false]
        )
      )
      ->add(
        'longQuestionNl',
        CKEditorType::class,
        $this->getConfiguration(
          'Long statement NL',
          'Long statement of the question in Dutch',
          ['required' => false]
        )
      )
      ->add('weight',IntegerType::class, $this->getConfiguration('Weight', 'Weight of the question to order it into the survey'))
      ->add('answers', CollectionType::class,
        [
          'entry_type' => AnswerSurveyType::class,
          'allow_add' => true,
          'allow_delete' => true,
        ]);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(
      [
        'data_class' => QuestionSurvey::class,
      ]
    );
  }
}
