<?php
declare(strict_types=1);

namespace AdapterOne\Adapters;

use AdapterOne\Contracts\EmailInterface;
use AdapterOne\Services\MailGun;

final class MailGunAdapter implements EmailInterface
{
    private MailGun $mailGun;

    public function __construct(MailGun $mailGun)
    {
        $this->mailGun = $mailGun;
    }

    public function send(string $to, string $from, string $subject, string $body): void
    {
        // Logic to send email using MailGun
        // ....
        // ....
        // ....

        $this->mailGun->sendGunMail($to, $from, $subject, $body);
    }
}
