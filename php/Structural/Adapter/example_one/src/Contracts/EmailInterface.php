<?php

namespace Src\Contracts;

// This is the Target interface. It defines the domain-specific interface used by the client code.
interface EmailInterface
{
    public function send(string $to, string $from, string $subject, string $body): void;
}
