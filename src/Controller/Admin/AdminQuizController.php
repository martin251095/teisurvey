<?php

namespace App\Controller\Admin;

use App\Form\QuizType;
use App\Service\TranslationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Quiz;
use App\Service\PaginationManager;
use App\Repository\QuizRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AdminQuizController extends AbstractController
{
  /**
   * View different quiz
   *
   * @Route("/admin/quiz/{page<\d+>?1}", name="admin_quiz_list")
   */
  public function list(QuizRepository $repo, $page, PaginationManager $pagination)
  {
    $pagination->setEntityClass(Quiz::class)
      ->setPage($page);

    return $this->render(
      'admin/quiz/list.html.twig',
      [
        'pagination' => $pagination,
      ]
    );
  }

  /**
   * Add a quiz
   *
   * @Route("/admin/quiz/add", name="admin_quiz_add")
   */
  public function add(Request $request, ObjectManager $em, TranslationManager $translationManager, TokenStorageInterface $tokenStorage)
  {
    $user = $tokenStorage->getToken()->getUser();

    $locales = $translationManager->getAvailableLocales();

    $quiz = new Quiz();

    $form = $this->createForm(QuizType::class, $quiz, [
      'translationManager' => $translationManager,
      'user' => $user
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em->persist($quiz);
      $em->flush();
      /** @var TranslationManager $emTranslation **/
      $emTranslation = $this->container->get('app.manager.translation');
      $emTranslation->saveTranslations($quiz);

      return $this->redirectToRoute('admin_quiz_list');
    }

    return $this->render(
      'admin/quiz/add.html.twig',
      [
        'locales' => $locales,
        'form' => $form->createView(),
      ]
    );
  }

  /**
   * Edit a quiz
   *
   * @Route("/admin/quiz/{id}/edit", name="admin_quiz_edit")
   *
   * @return Response
   */
  public function edit(Quiz $quiz, Request $request, ObjectManager $em, TranslationManager $translationManager)
  {
    $locales = $translationManager->getAvailableLocales();

    /** @var TranslationManager $emTranslation **/
    $translationManager->setTranslations($quiz);

    $form = $this->createForm(QuizType::class, $quiz, [
      'translationManager' => $translationManager,
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em->persist($quiz);
      $em->flush();

      $this->addFlash(
        'success',
        "The quiz<strong> {$quiz->getTitle()} </strong> has been edited"
      );

      $emTranslation = $this->container->get('app.manager.translation');
      $emTranslation->saveTranslations($quiz);

      if ($request->getSession()->has('referer')) {
        $url = $request->getSession()->get('referer');
        $request->getSession()->remove('referer');
      } else {
        $url = $this->generateUrl('admin_quiz_list');
      }

      return $this->redirect($url);
    } elseif (!$form->isSubmitted()) {
      $request->getSession()->set('referer', $request->headers->get('referer'));
    }

    return $this->render(
      'admin/quiz/edit.html.twig',
      [
        'locales' => $locales,
        'form' => $form->createView(),
      ]
    );
  }

  /**
   * Delete a quiz
   *
   * @Route("/admin/quiz/{id}/delete", name="admin_quiz_delete")
   *
   * @return Response
   */
  public function delete(Quiz $quiz, Request $request, ObjectManager $manager)
  {
    if (count($quiz->getCategories()) > 0) {
      $this->addFlash(
        'warning',
        'You can not delete the quiz because it contains categories'
      );
    } elseif (count($quiz->getQuizAnswers()) > 0) {
      $this->addFlash(
        'warning',
        'You can not delete the quiz because it is contained in results'
      );
    } else {
      $manager->remove($quiz);
      $manager->flush();

      $this->addFlash(
        'success',
        'The quiz was well deleted'
      );
    }

    return $this->redirect($request->headers->get('referer'));
  }
}
