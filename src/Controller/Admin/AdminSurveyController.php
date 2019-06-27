<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Service\TranslationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Survey;
use App\Form\SurveyType;
use App\Service\PaginationManager;
use App\Repository\SurveyRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AdminSurveyController extends AbstractController
{
    /**
     * View different survey
     *
     * @Route("/admin/survey/{page<\d+>?1}", name="admin_survey_list")
     */
    public function list(SurveyRepository $repo, $page, PaginationManager $pagination)
    {
        $pagination->setEntityClass(Survey::class)
          ->setPage($page);

        return $this->render(
          'admin/survey/list.html.twig',
          [
            'pagination' => $pagination,
          ]
        );
    }

    /**
     * Add a survey
     *
     * @Route("/admin/survey/add", name="admin_survey_add")
     */
    public function add(Request $request, ObjectManager $em, TranslationManager $translationManager, TokenStorageInterface $tokenStorage)
    {
        $user = $tokenStorage->getToken()->getUser();

        $locales = $translationManager->getAvailableLocales();

        $survey = new Survey();

        $form = $this->createForm(SurveyType::class, $survey, [
          'translationManager' => $translationManager,
          'user' => $user
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($survey);
            $em->flush();

            $translationManager->saveTranslations($survey);

            return $this->redirectToRoute('admin_survey_list');
        }

        return $this->render(
          'admin/survey/add.html.twig',
          [
            'locales' => $locales,
            'form' => $form->createView(),
          ]
        );
    }

    /**
     * Edit a survey
     *
     * @Route("/admin/survey/{id}/edit", name="admin_survey_edit")
     *
     * @return Response
     */
    public function edit(Survey $survey, Request $request, ObjectManager $em, TranslationManager $translationManager)
    {
        $locales = $translationManager->getAvailableLocales();

        /** @var TranslationManager $emTranslation **/
        $translationManager->setTranslations($survey);

        $form = $this->createForm(SurveyType::class, $survey, [
          'translationManager' => $translationManager,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($survey);
            $em->flush();

            $this->addFlash(
              'success',
              "The survey <strong> {$survey->getTitle()} </strong> has been edited"
            );

            $translationManager = $this->container->get('app.manager.translation');
            $translationManager->saveTranslations($survey);

            if ($request->getSession()->has('referer')) {
                $url = $request->getSession()->get('referer');
                $request->getSession()->remove('referer');
            } else {
                $url = $this->generateUrl('admin_survey_list');
            }

            return $this->redirect($url);
        } elseif (!$form->isSubmitted()) {
            $request->getSession()->set('referer', $request->headers->get('referer'));
        }

        return $this->render(
          'admin/survey/edit.html.twig',
          [
            'locales' => $locales,
            'form' => $form->createView(),
          ]
        );
    }

    /**
     * Delete a survey
     *
     * @Route("/admin/survey/{id}/delete", name="admin_survey_delete")
     *
     * @return Response
     */
    public function delete(Survey $survey, Request $request, ObjectManager $manager)
    {
        if (count($survey->getCategories()) > 0) {
            $this->addFlash(
              'warning',
              'You can not delete the survey because it contains categories'
            );
        } elseif (count($survey->getSurveyAnswers()) > 0) {
            $this->addFlash(
              'warning',
              'You can not delete the survey because it is contained in results'
            );
        } else {
            $manager->remove($survey);
            $manager->flush();

            $this->addFlash(
              'success',
              'The survey was well deleted'
            );
        }

        return $this->redirect($request->headers->get('referer'));
    }
}
