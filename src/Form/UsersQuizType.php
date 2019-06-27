<?php

namespace App\Form;

use App\Entity\Quiz;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UsersQuizType extends ApplicationType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $translationManager = $options['translationManager'];
    $locales = $translationManager->getAvailableLocales();

    $sendingEmailOptions = [];
    if ($options['user']) {
      $sendingEmailOptions['data'] = $options['user']->getEmail();
    }

    $builder
      ->add('title', TextType::class, $this->getConfiguration('Title', 'Title of the quiz'))
      ->add('titleFr', TextType::class, $this->getConfiguration('Title FR', 'Title of the quiz in French', ['required' => false]))
      ->add('titleNl', TextType::class, $this->getConfiguration('Title NL', 'Title of the quiz in Dutch', ['required' => false]))
      ->add('description', TextareaType::class, $this->getConfiguration('Description', 'Description of the quiz'))
      ->add('descriptionFr', TextareaType::class, $this->getConfiguration('Description FR', 'Description of the quiz in French', ['required' => false]))
      ->add('descriptionNl', TextareaType::class, $this->getConfiguration('Description NL', 'Description of the quiz in Dutch', ['required' => false]))
      ->add(
        'categories',
        CollectionType::class,
        [
          'entry_type' => QuizCategoryEmbeddedForm::class,
          'allow_delete' => true,
          'allow_add' => true,
          'by_reference' => false,
        ]
      )
      ->add('sendingEmail', EmailType::class, $sendingEmailOptions)
      ->add(
        'sendingEmailLanguage',
        ChoiceType::class,
        [
          'choices' => $locales,
        ]
      );
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(
      [
        'data_class' => Quiz::class,
        'user' => NULL,
      ]
    );

    $resolver->setRequired(
      [
        'translationManager',
      ]
    );
  }
}
