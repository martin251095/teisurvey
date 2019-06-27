<?php

namespace App\Controller\Admin;

use App\Service\TranslationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Service\PaginationManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use App\Form\CategoryTreeType;

class AdminCategoryController extends AbstractController
{
    /**
     * View categories
     *
     * @Route("/admin/category/{page<\d+>?1}", name="admin_category_list")
     */
    public function list(CategoryRepository $repo, $page, PaginationManager $pagination)
    {

        $pagination->setEntityClass(Category::class)
          ->setPage($page);

        return $this->render(
          'admin/category/list.html.twig',
          [
            'pagination' => $pagination,
          ]
        );
    }


    /**
     * Add a category
     *
     * @Route("/admin/category/add", name="admin_category_add")
     */
    public function add(Request $request, ObjectManager $em, TranslationManager $translationManager)
    {
        $locales = $translationManager->getAvailableLocales();

        $category = new Category();

        $form = $this->createForm(CategoryTreeType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($category);
            $em->flush();
            $translationManager->saveTranslations($category);

            return $this->redirectToRoute('admin_category_list');
        }

        return $this->render(
          'admin/category/add.html.twig',
          [
            'locales' => $locales,
            'form' => $form->createView(),
          ]
        );

    }

    /**
     * Edit a category
     *
     * @Route("/admin/category/{id}/edit", name="admin_category_edit")
     *
     * @return Response
     */
    public function edit(Category $category, Request $request, ObjectManager $em, TranslationManager $translationManager)
    {
        $locales = $translationManager->getAvailableLocales();
        $translationManager->setTranslations($category);

        $form = $this->createForm(CategoryTreeType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($category);
            $em->flush();

            $this->addFlash(
              'success',
              "The category <strong>{$category->getName()}</strong> has been edited"

            );

            $translationManager->saveTranslations($category);

            if ($request->getSession()->has('referer')) {
                $url = $request->getSession()->get('referer');
                $request->getSession()->remove('referer');
            } else {
                $url = $this->generateUrl('admin_category_list');
            }

            return $this->redirect($url);
        } elseif (!$form->isSubmitted()) {
            $request->getSession()->set('referer', $request->headers->get('referer'));
        }

        return $this->render(
          'admin/category/edit.html.twig',
          [
            'category' => $category,
            'locales' => $locales,
            'form' => $form->createView(),
          ]
        );
    }

    /**
     * Delete a category
     *
     * @Route("/admin/category/{id}/delete", name="admin_category_delete")
     *
     * @return Response
     */
    public function delete(Category $category, Request $request, ObjectManager $manager)
    {
        if ($category->isLeaf() != true) {
            $this->addFlash(
              'warning',
              'You can not delete a parent category'
            );
        } elseif (count($category->getQuestions()) > 0) {
            $this->addFlash(
              'warning',
              "You can not delete the category <strong>{$category->getName()}</strong> because it contains questions"
            );
        } else {
            $manager->remove($category);
            $manager->flush();

            $this->addFlash(
              'success',
              'The category was well deleted'
            );
        }

        return $this->redirect($request->headers->get('referer'));
    }
}
