<?php

namespace App\Controller\Admin;

use App\Service\TranslationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Question;
use App\Form\QuestionType;
use App\Service\PaginationManager;
use App\Repository\QuestionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;

class AdminQuestionController extends AbstractController
{
    /**
     * View questions
     *
     * @Route("/admin/question/{page<\d+>?1}", name="admin_question_list")
     */
    public function list(QuestionRepository $repo, $page, PaginationManager $pagination)
    {
        $pagination->setEntityClass(Question::class)
          ->setPage($page);

        return $this->render(
          'admin/question/list.html.twig',
          [
            'pagination' => $pagination,
          ]
        );
    }

    /**
     * Add a question
     *
     * @Route("/admin/question/add", name="admin_question_add")
     */
    public function add(Request $request, ObjectManager $em, TranslationManager $translationManager)
    {
        $locales = $translationManager->getAvailableLocales();

        $question = new Question();

        $form = $this->createForm(QuestionType::class, $question);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($question);

            $em->flush();
            $emTranslation = $this->container->get('app.manager.translation');
            $emTranslation->saveTranslations($question);

            return $this->redirectToRoute('admin_question_list');
        }

        return $this->render(
          'admin/question/add.html.twig',
          [
            'locales' => $locales,
            'form' => $form->createView(),
          ]
        );

    }

    /**
     * Edit a question
     *
     * @Route("/admin/question/{id}/edit", name="admin_question_edit")
     *
     * @return Response
     */
    public function edit(Question $question, Request $request, ObjectManager $em, TranslationManager $translationManager)
    {
        $locales = $translationManager->getAvailableLocales();

        $translationManager->setTranslations($question);

        $form = $this->createForm(QuestionType::class, $question);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($question);
            $em->flush();

            $this->addFlash(
              'success',
              "The question <strong>{$question->getQuestion()}</strong> has been edited"
            );

            $translationManager->saveTranslations($question);

            if ($request->getSession()->has('referer')) {
                $url = $request->getSession()->get('referer');
                $request->getSession()->remove('referer');
            } else {
                $url = $this->generateUrl('admin_question_list');
            }

            return $this->redirect($url);
        } elseif (!$form->isSubmitted()) {
            $request->getSession()->set('referer', $request->headers->get('referer'));
        }

        return $this->render(
          'admin/question/edit.html.twig',
          [
            'locales' => $locales,
            'form' => $form->createView(),
          ]
        );
    }

    /**
     * Delete a question
     *
     * @Route("/admin/question/{id}/delete", name="admin_question_delete")
     *
     * @return Response
     */
    public function delete(Question $question, Request $request, ObjectManager $manager)
    {
        if (count($question->getAnswers()) > 0) {
            $this->addFlash(
              'warning',
              'You can not delete the question because it contains answers'
            );
        } elseif (count($question->getSurveyAnswers()) > 0) {
            $this->addFlash(
              'warning',
              'You can not delete the question because it is contained in results'
            );
        } else {
            $manager->remove($question);
            $manager->flush();

            $this->addFlash(
              'success',
              'The question was well deleted'
            );
        }

        return $this->redirect($request->headers->get('referer'));
    }
}
