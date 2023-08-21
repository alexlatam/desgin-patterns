<?php

namespace Src\Adapters;

use Src\Contracts\EmailInterface;
use Src\Services\SendGrip;

class SendGripAdapter implements EmailInterface
{
    private SendGrip $sendGripService;

    public function __construct(SendGrip $sendGripService)
    {
        $this->sendGripService = $sendGripService;
    }

    public function send(string $to, string $from, string $subject, string $body): void
    {
        // Logic to send email using MailGun
        // ....
        // ....
        // ....

        $this->sendGripService->send($to, $from, $subject, $body);
    }
}
