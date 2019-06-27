<?php

namespace App\EventListener;

use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class FlashListener implements EventSubscriberInterface
{

    /**
     * @var Session
     */
    private $session;


    /**
     * FlashListener constructor.
     *
     * @param SessionInterface $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
          FOSUserEvents::RESETTING_SEND_EMAIL_COMPLETED => 'addSuccessFlash',
        );
    }

    /**
     * Add success message to flashbag
     */
    public function addSuccessFlash()
    {
        if (!$this->session->getFlashBag()->has('success')) {
            $this->session->getFlashBag()->add('success', 'An email has been sent to your address');
        }
    }
}