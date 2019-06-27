<?php

namespace App\Controller\Admin;

use App\Service\StatsManager;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * Admin Homepage
     *
     * @Route("/admin", name="admin_homepage")
     */
    public function index()
    {
        return $this->redirect('/admin/dashboard');
    }

  /**
   * Dashboard of the administration
   *
   * @Route("/admin/dashboard", name="admin_dashboard")
   * @param \App\Service\StatsManager $statsManager
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
    public function dashboard(StatsManager $statsManager)
    {
        $users = $statsManager->getUsersCount();
        $categories = $statsManager->getCategoriesCount();
        $questions = $statsManager->getQuestionsCount();
        $answers = $statsManager->getAnswersCount();
        $surveys = $statsManager->getSurveysCount();

        return $this->render(
          'admin/home.html.twig',
          [
            'stats' => [
              'users' => $users,
              'categories' => $categories,
              'questions' => $questions,
              'answers' => $answers,
              'surveys' => $surveys,
            ],
          ]
        );
    }
}
