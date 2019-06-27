<?php

namespace App\Controller\Site\Quiz;

use App\Entity\Category;
use App\Entity\Question;
use App\Entity\QuizAnswer;
use App\Repository\AnswerRepository;
use App\Service\PaginationManager;
use App\Service\ScoreCalculator;
use App\Service\TranslationManager;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SurveyAnswer;

class QuizAnswerController extends AbstractController
{
  /**
   * View results
   *
   * @Route("/admin/quizanswer/{page<\d+>?1}", name="admin_quizanswer_list")
   */
  public function listadmin($page, PaginationManager $pagination)
  {
    $pagination->setEntityClass(QuizAnswer::class)
      ->setPage($page);

    return $this->render(
      'admin/quizanswer/list.html.twig',
      [
        'pagination' => $pagination,
      ]
    );
  }

  /**
   * View the details of the results
   *
   * @Route("/admin/quizanswer/{id}/details", name="admin_quizanswer_details")
   */
  public function detailsadmin(
    $id,
    QuizAnswer $quizAnswer,
    AnswerRepository $answerRepository,
    ScoreCalculator $scoreCalculator,
    TranslationManager $translationManager
  ) {
    $firstname = $quizAnswer->getUserFirstname();
    $lastname = $quizAnswer->getUserLastname();

    $locale = $quizAnswer->getQuiz()->getSendingEmailLanguage();
    $answers = $answerRepository->findBySurveyAnswer($id);

    $quiz = $quizAnswer->getQuiz();
    $categories = $quiz->getCategories();

    /** @var TranslationManager $tm */
    $translationManager->setLocale($locale);

    $data = [];
    /** @var \App\Entity\Answer $answer */
    foreach ($answers as $answer) {
      /** @var Question $question */
      $question = $answer->getQuestion();

      /** @var Category $category */
      $category = $question->getCategory();
      $translationManager->setEntityTranslations($answer);
      $translationManager->setEntityTranslations($question);

      $data[$category->getId()]['category'] = $category;
      $data[$category->getId()]['questions'][$question->getId()]['question'] = $question;
      $data[$category->getId()]['questions'][$question->getId()]['answers'][] = $answer;
    }

    return $this->render(
      'admin/quizanswer/details.html.twig',
      [
        'data' => $data,
        'score' => $scoreCalculator->calculateScore($quizAnswer),
        'firstname' => $firstname,
        'lastname' => $lastname,
        'categories' => $categories,
      ]
    );
  }

  /**
   * View the details of the results
   *
   * @Route("/quizanswer/{id}/details", name="quizanswer_details")
   */
  public function detailsfront(
    $id,
    QuizAnswer $quizAnswer,
    AnswerRepository $answerRepository,
    ScoreCalculator $scoreCalculator
  ) {
    $firstname = $quizAnswer->getUserFirstname();
    $lastname = $quizAnswer->getUserLastname();

    $locale = $quizAnswer->getQuiz()->getSendingEmailLanguage();
    $answers = $answerRepository->findBySurveyAnswer($id);

    $quiz = $quizAnswer->getQuiz();
    $categories = $quiz->getCategories();

    /** @var TranslationManager $tm */
    $tm = $this->container->get('app.manager.translation');
    $tm->setLocale($locale);

    $data = [];
    /** @var \App\Entity\Answer $answer */
    foreach ($answers as $answer) {
      /** @var Question $question */
      $question = $answer->getQuestion();

      /** @var Category $category */
      $category = $question->getCategory();
      $tm->setEntityTranslations($answer);
      $tm->setEntityTranslations($question);

      $data[$category->getId()]['category'] = $category;
      $data[$category->getId()]['questions'][$question->getId()]['question'] = $question;
      $data[$category->getId()]['questions'][$question->getId()]['answers'][] = $answer;
    }

    return $this->render(
      'site/quizanswer/details.html.twig',
      [
        'data' => $data,
        'score' => $scoreCalculator->calculateScore($quizAnswer),
        'firstname' => $firstname,
        'lastname' => $lastname,
        'categories' => $categories,
      ]
    );
  }

  /**
   * Delete a result
   *
   * @Route("/admin/surveyanswer/{id}/delete", name="admin_quizanswer_delete")
   *
   * @return Response
   */
  public function delete(QuizAnswer $quizAnswer, Request $request, ObjectManager $manager)
  {

    $manager->remove($quizAnswer);
    $manager->flush();

    $this->addFlash(
      'success',
      'Deletion performed'
    );

    return $this->redirect($request->headers->get('referer'));
  }
}
