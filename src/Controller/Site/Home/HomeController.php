<?php

namespace App\Controller\Site\Home;

use App\Entity\Survey;
use App\Entity\Quiz;
use App\Repository\SurveyRepository;
use App\Repository\QuizRepository;
use App\Service\TranslationManager;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
   * @Route("/", name="homepage")
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   */
  public function redirection()
  {
    return $this->redirect('/en/home');
  }

  /**
   * @param \App\Repository\SurveyRepository $repoSurv
   * @param \App\Repository\QuizRepository $repoQuiz
   *
   * @return \Symfony\Component\HttpFoundation\Response
   *
   * @Route("/home", name="home")
   */
  public function home(SurveyRepository $repoSurv, QuizRepository $repoQuiz, TranslationManager $translationManager)
  {
    $locales = $translationManager->getAvailableLocales();
    $surveys = $repoSurv->findLastSurveys(6);
    $quizzes = $repoQuiz->findLastQuizzes(6);

    return $this->render('site/home.html.twig',
    [
      'locales' => $locales,
      'surveys' => $surveys,
      'quizzes' => $quizzes
    ]);

  }
}
