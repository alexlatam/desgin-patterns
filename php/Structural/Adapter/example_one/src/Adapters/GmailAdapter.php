<?php
declare(strict_types=1);

namespace AdapterOne\Adapters;

use AdapterOne\Contracts\EmailInterface;
use AdapterOne\Services\Gmail;

final class GmailAdapter implements EmailInterface
{
    private Gmail $gmailService;

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

        $this->gmailService->sendMail($to, $from, $subject, $body);
    }
}
