<?php

declare(strict_types=1);

namespace Src\Adapters;

use Src\Contracts\EmailInterface;
use Src\Services\Gmail;

class GmailAdapter implements EmailInterface
{
    private $gmailService;

    public function __construct(Gmail $gmailService)
    {
        $this->gmailService = $gmailService;
    }

    public function send(string $to, string $from, string $subject, string $body): void
    {
        // Logic to send email using MailGun
        // ....
        // ....
        // ....

        $this->gmailService->send($to, $from, $subject, $body);
    }
}
