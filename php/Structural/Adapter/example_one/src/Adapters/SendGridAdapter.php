<?php
declare(strict_types=1);

namespace AdapterOne\Adapters;

use AdapterOne\Contracts\EmailInterface;
use AdapterOne\Services\SendGrid;

final readonly class SendGridAdapter implements EmailInterface
{
    public function __construct(private SendGrid $sendGripService)
    {
    }

    public function send(string $to, string $from, string $subject, string $body): void
    {
        // Logic to send email using SendGrip
        // ....
        // ....
        // ....

        $this->sendGripService->send($to, $from, $subject, $body);
    }
}
