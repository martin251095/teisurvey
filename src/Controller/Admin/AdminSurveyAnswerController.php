<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Question;
use App\Repository\AnswerRepository;
use App\Service\PaginationManager;
use App\Service\ScoreCalculator;
use App\Service\TranslationManager;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SurveyAnswer;

class AdminSurveyAnswerController extends AbstractController
{
    /**
     * View results
     *
     * @Route("/admin/surveyanswer/{page<\d+>?1}", name="admin_surveyanswer_list")
     */
    public function list($page, PaginationManager $pagination)
    {
        $pagination->setEntityClass(SurveyAnswer::class)
          ->setPage($page);

        return $this->render(
          'admin/surveyanswer/list.html.twig',
          [
            'pagination' => $pagination,
          ]
        );
    }

    /**
     * View the details of the results
     *
     * @Route("/admin/surveyanswer/{id}/details", name="admin_surveyanswer_details")
     */
    public function details(
      $id,
      SurveyAnswer $surveyAnswer,
      AnswerRepository $answerRepository,
      ScoreCalculator $scoreCalculator
    ) {
        $firstname = $surveyAnswer->getUserFirstname();
        $lastname = $surveyAnswer->getUserLastname();

        $locale = $surveyAnswer->getSurvey()->getSendingEmailLanguage();
        $answers = $answerRepository->findBySurveyAnswer($id);

        $survey = $surveyAnswer->getSurvey();
        $categories = $survey->getCategories();

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
          'admin/surveyanswer/details.html.twig',
          [
            'data' => $data,
            'score' => $scoreCalculator->calculateScore($surveyAnswer),
            'firstname' => $firstname,
            'lastname' => $lastname,
            'categories' => $categories,
          ]
        );
    }

    /**
     * Delete a result
     *
     * @Route("/admin/surveyanswer/{id}/delete", name="admin_surveyanswer_delete")
     *
     * @return Response
     */
    public function delete(SurveyAnswer $surveyAnswer, Request $request, ObjectManager $manager)
    {

        $manager->remove($surveyAnswer);
        $manager->flush();

        $this->addFlash(
          'success',
          'Deletion performed'
        );

        return $this->redirect($request->headers->get('referer'));
    }
}
