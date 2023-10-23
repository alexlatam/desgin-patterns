<?php

namespace AdapterOne\Contracts;

// Esta interface define el contrato que deben seguir todos los adaptadores
interface EmailInterface
{
    public function send(string $to, string $from, string $subject, string $body): void;
}
