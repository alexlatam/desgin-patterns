<?php

namespace Proxy\Services;

class EmailService
{
    public function send(string $to): void
    {
        echo "Sending email to $to. The process was successfully!" . PHP_EOL;
    }
}
