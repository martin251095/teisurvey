<?php

namespace App\Controller\Admin;

use App\Repository\AnswerRepository;
use App\Service\TranslationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Answer;
use App\Form\AnswerType;
use App\Service\PaginationManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;

class AdminAnswerController extends AbstractController
{
    /**
     * View answers
     *
     * @Route("/admin/answer/{page<\d+>?1}", name="admin_answer_list")
     */
    public function list($page, PaginationManager $pagination)
    {
        $pagination->setEntityClass(Answer::class)
          ->setPage($page);

        return $this->render(
          'admin/answer/list.html.twig',
          [
            'pagination' => $pagination,
          ]
        );
    }

    /**
     * Add an answer
     *
     * @Route("/admin/answer/add", name="admin_answer_add")
     */
    public function add(Request $request, ObjectManager $em, TranslationManager $translationManager)
    {
        $locales = $translationManager->getAvailableLocales();

        $answer = new Answer();

        $form = $this->createForm(AnswerType::class, $answer);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($answer);
            $em->flush();
            $emTranslation = $this->container->get('app.manager.translation');
            $emTranslation->saveTranslations($answer);

            return $this->redirectToRoute('admin_answer_list');
        }

        return $this->render(
          'admin/answer/add.html.twig',
          [
            'locales' => $locales,
            'form' => $form->createView(),
          ]
        );

    }

    /**
     * Edit an answer
     *
     * @Route("/admin/answer/{id}/edit", name="admin_answer_edit")
     *
     * @return Response
     */
    public function edit(Answer $answer, Request $request, ObjectManager $manager, TranslationManager $translationManager)
    {
        $locales = $translationManager->getAvailableLocales();

        $translationManager = $this->container->get('app.manager.translation');
        $translationManager->setTranslations($answer);

        $form = $this->createForm(AnswerType::class, $answer);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($answer);
            $manager->flush();

            $this->addFlash(
              'success',
              "The answer <strong>{$answer->getAnswer()}</strong> has been edited"
            );

            $emTranslation = $this->container->get('app.manager.translation');
            $emTranslation->saveTranslations($answer);

            if ($request->getSession()->has('referer')) {
                $url = $request->getSession()->get('referer');
                $request->getSession()->remove('referer');
            } else {
                $url = $this->generateUrl('admin_answer_list');
            }

            return $this->redirect($url);
        } elseif (!$form->isSubmitted()) {
            $request->getSession()->set('referer', $request->headers->get('referer'));
        }

        return $this->render(
          'admin/answer/edit.html.twig',
          [
            'locales' => $locales,
            'form' => $form->createView(),
          ]
        );
    }

    /**
     * Delete an answer
     *
     * @Route("/admin/answer/{id}/delete", name="admin_answer_delete")
     *
     * @return Response
     */
    public function delete($id, Request $request, Answer $answer, AnswerRepository $answerRepository, ObjectManager $manager)
    {
        $request->getSession()->set('referer', $request->headers->get('referer'));

        if ($answerRepository->countBySurveyAnswer($id) > 0) {
            $this->addFlash(
              'warning',
              'You can not delete the answer because it is contained in results'
            );
        } else {
            $manager->remove($answer);
            $manager->flush();

            $this->addFlash(
              'success',
              'The answer was well deleted'
            );
        }

        return $this->redirect($request->headers->get('referer'));
    }
}

