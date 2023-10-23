<?php 

require 'vendor/autoload.php';

use AdapterOne\Adapters\GmailAdapter;
use AdapterOne\Adapters\MailGunAdapter;
use AdapterOne\Adapters\SendGridAdapter;
use AdapterOne\Contracts\EmailInterface;
use AdapterOne\Services\Gmail;
use AdapterOne\Services\MailGun;
use AdapterOne\Services\SendGrid;

final class EmailSender
{
    public function sendEmail(EmailInterface $email): void
    {
        $email->send(
            to: 'alex@mail.com',
            from: 'person@mail.com',
            subject: 'Hello, this is the subject',
            body: 'Hello from the app!'
        );
    }
}

$emailSender = new EmailSender();

// Send email using MailGun
$emailSender->sendEmail(new MailGunAdapter(new MailGun()));

// Send email using Gmail
$emailSender->sendEmail(new GmailAdapter(new Gmail()));

// Send email using SendGrid
$emailSender->sendEmail(new SendGridAdapter(new SendGrid()));

/**
 * Todos los servicios de envío de email se _ADAPTAN_ a la interfaz EmailInterface
 * Output:
 *
 * Sending email using MailGun
 * Sending email using Gmail
 * Sending email using SendGrid
 */