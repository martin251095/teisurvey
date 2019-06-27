<?php

namespace App\Controller\Site\Quiz;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use App\Entity\QuizAnswer;
use App\Repository\QuizRepository;
use App\Service\NotificationManager;
use App\Service\PaginationManager;
use App\Service\ScoreCalculator;
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
 * Class QuizController
 * @package App\Controller\Quiz
 * QuizController because create the view of the quiz for the user but fill in the fields of the SurveyAnswer Entity
 */
class QuizController extends AbstractController
{
  /**
   * @Route("/quiz/{page<\d+>?1}", name="quiz_list")
   *
   * @param \App\Repository\QuizRepository $repoQuiz
   * @param $page
   * @param \App\service\PaginationManager $pagination
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
    public function list(QuizRepository $repoQuiz, $page, PaginationManager $pagination, TranslationManager $translationManager)
    {
      $locales = $translationManager->getAvailableLocales();
      $pagination->setEntityClass(Quiz::class)
                 ->setPage($page);

      return $this->render('site/quiz/list.html.twig', [
        'pagination' => $pagination,
        'locales' => $locales
      ]);
    }

  /**
   *  @Route("/quiz/create", name="quiz_create")
   *
   */
  public function create()
  {
    // TO DO
    return $this->render('site/quiz/add.html.twig');
  }

    /**
     * Displays the quiz
     *
     * TO DO : Refactoring
     *
     * @Route("/quiz/{slug}", name="quiz_show")
     *
     * @param $slug
     * @param Request $request
     * @param ObjectManager $manager
     * @param NotificationManager $notificationManager
     * @param ScoreCalculator $scoreCalculator
     * @param TranslationManager $translationManager
     * @return void
     */
    public function show(
      $slug,
      Request $request,
      ObjectManager $manager,
      NotificationManager $notificationManager,
      ScoreCalculator $scoreCalculator,
      TranslationManager $translationManager
    ) {
        // Create the form View

        $locales = $translationManager->getAvailableLocales();
        $repoQuiz = $manager->getRepository(Quiz::class);
        $repoQuestion = $manager->getRepository(Question::class);
        $repoAnswer = $manager->getRepository(Answer::class);

        /** @var Quiz $quiz */
        $quiz = $repoQuiz->findOneBySlug($slug);

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
        foreach ($quiz->getCategories() as $category) {

            $formData[$i] = ['name' => $category->getName()];

            foreach ($category->getQuestions() as $question) {
                $isMultiple = $question->isMultipleAnswers();
                $choices = [];

                foreach ($question->getAnswers() as $answer) {
                    $choices[$category->getName()][$answer->getAnswer()] = $question->getId().'-'.$answer->getId();
                }

                $formData[$i]['questions'][$j] = $question->getLongQuestion();
                $builder->add(
                  'question_'.$j,
                  ChoiceType::class,
                  [
                    'label' => $question->getQuestion(),
                    'choices' => $choices,
                    'constraints' => [new NotBlank],
                    'multiple' => $isMultiple,
                    'expanded' => true,
                    'attr' => ['class' => 'answer'],
                  ]
                );
                $j++;
            }
            $i++;
        }

        $builder->add('send', SubmitType::class);

        $form = $builder->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $quizAnswer = new QuizAnswer();

            $data = $form->getData();

            // set informations into the database of surveyAnswer
            $quizAnswer
              ->setQuiz($quiz)
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
                            $quizAnswer
                              ->addQuestion($question)
                              ->addAnswer($userAnswer);
                        }

                        // if only one answer for one question
                    } else {
                        // separate id question and id answer
                        $values = explode('-', $data['question_'.$i]);

                        /** @var Question $question */
                        // get value of the question by id and key in the array
                        $question = $repoQuestion->find($values[0]);

                        /** @var Answer $answer */
                        // get value of the answer of the user by id and key in the array
                        $userAnswer = $repoAnswer->find($values[1]);

                        // add each answer and each question into the database of surveyAnswer
                        $quizAnswer
                          ->addQuestion($question)
                          ->addAnswer($userAnswer);
                    }

                } else {
                    break;
                }

            }

            $score = $scoreCalculator->calculateScore($quizAnswer);

            // Set scoreTotal of the user and totalMax of the quiz
            $scoreTotal = array_sum($score['scoreCategories']);
            $totalMax = array_sum($score['maxCategories']);

            $quizAnswer
              ->setScore($scoreTotal)
              ->setTotal($totalMax);

            $manager->persist($quizAnswer);
            $manager->flush();

            $idquiz = $quizAnswer->getId();

            // Set parameters of the email
            $options = [
              'subject' => 'Quiz results',
              'data' => [
                'id' => $quizAnswer->getId(),
                'survey' => $quiz->getTitle(),
                'userFirstname' => $data['userFirstname'],
                'userLastname' => $data['userLastname'],
                'userEmail' => $data['userEmail'],
                'score' => $scoreTotal,
                'total' => $totalMax,
                'pourcent' => (($scoreTotal * 100) / $totalMax),
                'language' => $request->getLocale(),
                'emailLang' => $quiz->getSendingEmailLanguage(),
              ],
            ];

            $notificationManager
              ->setTo($quizAnswer->getUserEmail())
              ->buildMessage($options, 'quiz')
              ->drop();

            return $this->redirectToRoute('quiz_thanks');
        }

        return $this->render(
          'site/quiz/index.html.twig',
          [
            'locales' => $locales,
            'quiz' => $quiz,
            'form' => $form->createView(),
            'formData' => $formData,
          ]
        );
    }

    /**
     * Thanks page
     *
     * @Route("/thanks", name="quiz_thanks")
     */
    public function thanks(TranslationManager $translationManager)
    {
        $locales = $translationManager->getAvailableLocales();
        return $this->render('site/quiz/thanks.html.twig', [
          'locales' => $locales,
        ]);
    }

}
