<?php

namespace App\Controller\Admin;

use App\Entity\Survey;
use App\Service\NotificationManager;
use FOS\UserBundle\Util\TokenGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Form\AdminUsersType;
use App\Form\AdminUsersAddType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;

class AdminUsersController extends AbstractController
{
    /**
     * View different users
     *
     * @Route("/admin/user", name="admin_user_list")
     */
    public function list()
    {
        $repo = $this->getDoctrine()->getRepository(User::class);
        $users = $repo->findAll();

        return $this->render(
          'admin/user/list.html.twig',
          [
            'users' => $users,
          ]
        );
    }

    /**
     * Add a user
     *
     * @Route("/admin/user/add", name="admin_user_add")
     */
    public function add(Request $request, ObjectManager $em, NotificationManager $notificationManager)
    {
        $user = new User();

        $form = $this->createForm(AdminUsersAddType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $tokenGenerator = new TokenGenerator();
            $password = substr($tokenGenerator->generateToken(), 0, 8);

            $user->setPlainPassword($password);

            $options = [
              'subject' => 'Datas of connection',
              'data' => [
                'username' => $user->getUsername(),
                'password' => $user->getPlainPassword(),
              ],
            ];

            $em->persist($user);
            $em->flush();

            $notificationManager
              ->setTo($user->getEmail())
              ->buildMessage($options, 'newadmin')
              ->drop();

            return $this->redirectToRoute('admin_user_list');
        }

        return $this->render(
          'admin/user/add.html.twig',
          [
            'form' => $form->createView(),
          ]
        );

    }

    /**
     * Edit a user
     *
     * @Route("/admin/user/{id}/edit", name="admin_user_edit")
     *
     * @return Response
     */
    public function edit(User $user, Request $request, ObjectManager $manager)
    {

        $form = $this->createForm(AdminUsersType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
              'success',
              'The user has been edited'
            );

            if ($request->getSession()->has('referer')) {
                $url = $request->getSession()->get('referer');
                $request->getSession()->remove('referer');
            } else {
                $url = $this->generateUrl('admin_user_list');
            }

            return $this->redirect($url);
        } elseif (!$form->isSubmitted()) {
            $request->getSession()->set('referer', $request->headers->get('referer'));
        }

        return $this->render(
          'admin/user/edit.html.twig',
          [
            'user' => $user,
            'form' => $form->createView(),
          ]
        );
    }

    /**
     * Delete a user
     *
     * @Route("/admin/user/{id}/delete", name="admin_user_delete")
     *
     * @return Response
     */
    public function delete(User $user, Request $request, ObjectManager $manager)
    {
        $email = $user->getEmail();

        $repoSurvey = $manager->getRepository(Survey::class);
        $sendingEmail = $repoSurvey->findOneBy([
          'sendingEmail' => $email,
        ]);

        if(!empty($sendingEmail)){
            $this->addFlash(
              'warning',
              'You cant delete this admin because it is linked with survey'
            );
        } else {
            $manager->remove($user);
            $manager->flush();

            $this->addFlash(
              'success',
              'The user was well deleted'
            );
        }

        return $this->redirect($request->headers->get('referer'));
    }

}
