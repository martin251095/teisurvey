<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NotificationManager extends AbstractController
{
    /**
     * @var string
     */
    private $fromAddress;

    /**
     * @var string
     */
    private $toAddress;

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var \Swift_Message
     */
    private $message;

    /**
     * NotificationManager constructor.
     * @param \Swift_Mailer $mailer
     * @param ParameterBagInterface $parameters
     */
    public function __construct(\Swift_Mailer $mailer, ParameterBagInterface $parameters)
    {
        $this->mailer = $mailer;
        $this->toAddress = $parameters->get('default_to');
        $this->fromAddress = $parameters->get('default_from');
    }

    /**
     * @param string $toAddress
     * @return NotificationManager
     */
    public function setTo($toAddress): self
    {
        $this->toAddress = $toAddress;

        return $this;
    }

    /**
     * @param array $options
     * @return NotificationManager
     */
    public function buildMessage(array $options = [], $template): self
    {
        $subject = $options['subject'] ?? null;
        $data = $options['data'] ?? [];

        $this->message = (new \Swift_Message($subject))
          ->setFrom($this->fromAddress)
          ->setTo($this->toAddress)
          ->setBody(
            $this->render(
              'email/'.$template.'.html.twig',
              [
                'data' => $data,
              ]
            ),
            'text/html'
          );

        return $this;
    }

    /**
     * @return self
     */
    public function drop(): self
    {
        $this->mailer->send($this->message);

        return $this;
    }

}