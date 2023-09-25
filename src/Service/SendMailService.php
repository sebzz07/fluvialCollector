<?php
declare(strict_types=1);

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class SendMailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(string $from, string $to, string $subject, string $template, array $context) : void
    {

        $email = (new templatedEmail())
            ->from($from)
            ->to($to)
            ->subject($subject)
            ->htmlTemplate("emails/$template.html.twig")
            ->context($context);

        $mailer->send($email);
    }
}