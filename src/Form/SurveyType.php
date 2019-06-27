<?php

namespace App\Form;

use App\Entity\Survey;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SurveyType extends ApplicationType
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
          ->add('title', TextType::class, $this->getConfiguration('Title', 'Title of the survey'))
          ->add('titleFr', TextType::class, $this->getConfiguration('Title FR', 'Title of the survey in French', ['required' => false]))
          ->add('titleNl', TextType::class, $this->getConfiguration('Title NL', 'Title of the survey in Dutch', ['required' => false]))
          ->add('description', TextareaType::class, $this->getConfiguration('Description', 'Description of the survey'))
          ->add('descriptionFr', TextareaType::class, $this->getConfiguration('Description FR', 'Description of the survey in French', ['required' => false]))
          ->add('descriptionNl', TextareaType::class, $this->getConfiguration('Description NL', 'Description of the survey in Dutch', ['required' => false]))
          ->add('questionSurveys',CollectionType::class,
              [
                'entry_type' => QuestionSurveyType::class,
                'allow_add' => true,
                'allow_delete' => true,
              ]
            )
          ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
          [
            'data_class' => Survey::class,
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
