<?php
declare(strict_types=1);

namespace AdapterOne\Adapters;

use AdapterOne\Contracts\EmailInterface;
use AdapterOne\Services\MailGun;

final readonly class MailGunAdapter implements EmailInterface
{
    public function __construct(private MailGun $mailGun)
    {
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
