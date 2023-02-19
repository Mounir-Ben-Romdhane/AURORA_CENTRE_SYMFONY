<?php

namespace App\Service;

use Doctrine\ORM\Query\Expr\From;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class SendMailService 
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(
        string $from,
        string $to,
        string $subject,
        string $template,
        array $context,
    ): void
    {
        // On crée le mail
        $email = (new TemplatedEmail())
            ->From($from)
            ->to($to)
            ->subject($subject)
            ->htmlTemplate("emails/$template.html.twig")
            ->context($context);

        // On envoi le mail
        $this->mailer->send($email);
    }

}