<?php

namespace Src\Adapters;

use Src\Contracts\EmailInterface;
use Src\Services\MailGun;

class MailGunAdapter implements EmailInterface
{
    private $mailGun;

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

        $this->mailGun->send($to, $from, $subject, $body);
    }
}
