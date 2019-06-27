<?php

namespace App\Controller\Site\Contact;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

  /**
   * @Route("/contact", name="contact")
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function home()
  {
    return $this->render('site/contact.html.twig', []);
  }
}
