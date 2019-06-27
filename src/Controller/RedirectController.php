<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class RedirectController extends AbstractController
{
    /**
     * Redirect to homepage
     * @Route("/resetting/check-email", name="check_email")
     */
    public function redirectRequest()
    {
        return $this->redirect('/en/home');
    }

    /**
     * Redirect to homepage
     * @Route("/profile", name="profile")
     */
    public function redirectReset()
    {
        return $this->redirect('/en/home');
    }

    /**
     * Block access to some url
     * @Route ("/resetting/request", name="request")
     */
    public function blockAccess(AuthorizationCheckerInterface $authChecker)
    {
        if (true === $authChecker->isGranted('ROLE_ADMIN')) {
            return $this->render('bundles/TwigBundle/Exception/error404.html.twig');
        } else {
            return $this->render('bundles/FOSUserBundle/Resetting/request.html.twig');
        }

    }
}
