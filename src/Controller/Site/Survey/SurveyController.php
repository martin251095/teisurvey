<?php

namespace App\Controller\Site\Survey;

use App\Entity\Answer;
use App\Entity\AnswerSurvey;
use App\Entity\Question;
use App\Entity\QuestionSurvey;
use App\Entity\Survey;
use App\Entity\SurveyAnswer;
use App\Form\SurveyType;
use App\Repository\SurveyRepository;
use App\Service\NotificationManager;
use App\Service\PaginationManager;
use App\Service\StatsCalculator;
use App\Service\TranslationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class SurveyController
 * @package App\Controller\Survey
 * QuizController because create the view of the survey for the user but fill in the fields of the SurveyAnswer Entity
 */
class SurveyController extends AbstractController
{
  /**
   * @Route("/survey/{page<\d+>?1}", name="survey_list")
   *
   * @param \App\Repository\SurveyRepository $repoSurv
   * @param $page
   * @param \App\service\PaginationManager $pagination
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function list(SurveyRepository $repoQuiz, $page, PaginationManager $pagination, TranslationManager $translationManager)
  {
    $locales = $translationManager->getAvailableLocales();
    $pagination->setEntityClass(Survey::class)
      ->setPage($page);

    return $this->render('site/survey/list.html.twig', [
      'pagination' => $pagination,
      'locales' => $locales
    ]);
  }

  /**
   * @Route("/survey/create", name="survey_create")
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   * @param \Doctrine\Common\Persistence\ObjectManager $manager
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
   */
  public function create(Request $request, ObjectManager $manager, TranslationManager $translationManager)
  {
    $locales = $translationManager->getAvailableLocales();

    $survey = new Survey();

    $form = $this->createForm(SurveyType::class, $survey, [
      'translationManager' => $translationManager,
    ]);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      foreach($survey->getQuestionSurveys() as $question){
        $question->setSurvey($survey);
        $manager->persist($question);

        $translationManager->saveTranslations($question);
        foreach($question->getAnswers() as $answer){
          $answer->setQuestionSurvey($question);
          $manager->persist($answer);

          $translationManager->saveTranslations($answer);
        }
      }

      $manager->persist($survey);
      $manager->flush();

      $translationManager->saveTranslations($survey);

      $this->addFlash(
        'success',
        'The survey has been created'
      );

      return $this->redirectToRoute('home');
    }

    return $this->render('site/survey/add.html.twig', [
      'locales' => $locales,
      'form' => $form->createView()
    ]);
  }

  /**
   * Displays the survey
   *
   * TO DO : Refactoring
   *
   * @Route("/survey/{slug}", name="survey_show")
   *
   * @param $slug
   * @param Request $request
   * @param ObjectManager $manager
   * @param NotificationManager $notificationManager
   * @param StatsCalculator $statsCalculator
   * @param TranslationManager $translationManager
   * @return void
   */
  public function show(
    $slug,
    Request $request,
    ObjectManager $manager,
    NotificationManager $notificationManager,
    StatsCalculator $scoreCalculator,
    TranslationManager $translationManager
  ) {
    // Create the form View

    $locales = $translationManager->getAvailableLocales();
    $repoSurvey = $manager->getRepository(Survey::class);
    $repoQuestion = $manager->getRepository(QuestionSurvey::class);
    $repoAnswer = $manager->getRepository(AnswerSurvey::class);

    /** @var Survey $survey */
    $survey = $repoSurvey->findOneBySlug($slug);

    $builder = $this->createFormBuilder([])
      ->add(
        'userFirstname',
        TextType::class,
        [
          'label' => 'firstname.label',
          'attr' => ['class' => 'firstname'],
          'required' => true,
          'constraints' => [new NotBlank]
        ]
      )
      ->add(
        'userLastname',
        TextType::class,
        [
          'label' => 'lastname.label',
          'attr' => ['class' => 'lastname'],
          'required' => true,
          'constraints' => [new NotBlank]
        ]
      )
      ->add(
        'userEmail',
        EmailType::class,
        [
          'label' => 'email.label',
          'attr' => ['class' => 'email'],
          'required' => true,
          'constraints' => [new NotBlank]
        ]
      );

    $i = 1;
    $j = 1;
    $formData = [];

    // foreach category set the form view with the linked question and the linked answer of that category
    foreach ($survey->getQuestionSurveys() as $questionSurvey) {

      $formData[$i] = ['name' => $questionSurvey->getQuestion()];
      $choices = [];

      foreach ($questionSurvey->getAnswers() as $answer) {
        $choices[$questionSurvey->getQuestion()][$answer->getAnswer()] = $questionSurvey->getId().'-'.$answer->getId();
      }

      $formData[$i]['questions'][$j] = $questionSurvey->getLongQuestion();
      $builder->add(
        'question_'.$j,
        ChoiceType::class,
        [
          'label' => $questionSurvey->getQuestion(),
          'choices' => $choices,
          'constraints' => [new NotBlank],
          'expanded' => true,
          'attr' => ['class' => 'answer'],
        ]
      );
      $j++;
      $i++;
    }

    $builder->add('send', SubmitType::class);

    $form = $builder->getForm();

    $form->handleRequest($request);


    if ($form->isSubmitted() && $form->isValid()) {

      $surveyAnswer = new SurveyAnswer();

      $data = $form->getData();

      // set informations into the database of surveyAnswer
      $surveyAnswer
        ->setSurvey($survey)
        ->setUserFirstname($data['userFirstname'])
        ->setUserLastname($data['userLastname'])
        ->setUserEmail($data['userEmail']);


      for ($i = 1; $i <= (count($data) - 2); $i++) {
        if (isset($data['question_'.$i])) {

          // if multiple answer for one question
          if (is_array($data['question_'.$i])) {

            // data for question-answer = array with value x-y => x = id of the question and y = id of the answer
            foreach ($data['question_'.$i] as $answer_string) {

              // separate id question and id answer
              $values = explode('-', $answer_string);

              /** @var Question $question */
              // get value of the question by id and key in the array
              $question = $repoQuestion->find($values[0]);

              /** @var Answer $answer */
              // get value of the answer of the user by id and key in the array
              $userAnswer = $repoAnswer->find($values[1]);

              // add each answer and each question into the database of surveyAnswer
              $surveyAnswer
                ->addQuestion($question)
                ->addAnswerSurvey($userAnswer);
            }

            // if only one answer for one question
          } else {
            // separate id question and id answer
            $values = explode('-', $data['question_'.$i]);

            /** @var Question $question */
            // get value of the question by id and key in the array
            $questionSurvey = $repoQuestion->find($values[0]);

            /** @var Answer $answer */
            // get value of the answer of the user by id and key in the array
            $userAnswer = $repoAnswer->find($values[1]);

            // add each answer and each question into the database of surveyAnswer
            $surveyAnswer
              ->addQuestion($questionSurvey)
              ->addAnswerSurvey($userAnswer);
          }

        } else {
          break;
        }

      }

      $stats = $statsCalculator->calculateStats($surveyAnswer);

      // Set scoreTotal of the user and totalMax of the survey
      $scoreTotal = array_sum($stats['scoreCategories']);
      $totalMax = array_sum($stats['maxCategories']);

      $surveyAnswer
        ->setScore($scoreTotal)
        ->setTotal($totalMax);

      $manager->persist($surveyAnswer);
      $manager->flush();


      // Set parameters of the email
      $options = [
        'subject' => 'Surveys results',
        'data' => [
          'id' => $surveyAnswer->getId(),
          'survey' => $survey->getTitle(),
          'userFirstname' => $data['userFirstname'],
          'userLastname' => $data['userLastname'],
          'userEmail' => $data['userEmail'],
          'score' => $scoreTotal,
          'total' => $totalMax,
          'pourcent' => (($scoreTotal * 100) / $totalMax),
          'language' => $request->getLocale(),
        ],
      ];

      $notificationManager
        ->setTo($surveyAnswer->getUserEmail())
        ->buildMessage($options, 'survey')
        ->drop();

      return $this->redirectToRoute('survey_thanks');
    }

    return $this->render(
      'site/survey/index.html.twig',
      [
        'locales' => $locales,
        'survey' => $survey,
        'form' => $form->createView(),
        'formData' => $formData,
      ]
    );
  }

  /**
   * Thanks page
   *
   * @Route("/thanks", name="survey_thanks")
   */
  public function thanks(TranslationManager $translationManager)
  {
    $locales = $translationManager->getAvailableLocales();
    return $this->render('site/survey/thanks.html.twig', [
      'locales' => $locales,
    ]);
  }

}
