<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccountController extends AbstractController
{

  /**
   * @Route("/users/login", name="users_login")
   */
  public function login(AuthenticationUtils $utils)
  {
    $error = $utils->getLastAuthenticationError();
    $username = $utils->getLastUsername();

    return $this->render('site/users/login.html.twig', [
      'error' => $error!== null,
      'last_username' => $username
    ]);
  }

  /**
   * @Route("/users/logout", name="users_logout")
   */
  public function logout()
  {

  }
}
