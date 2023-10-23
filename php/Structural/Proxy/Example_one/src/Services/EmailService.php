<?php

namespace Proxy\Services;

// Este es un servicio que NO forma parte del patron. Simplemente es un servicio que se usa en el ejemplo.
final class EmailService
{
    public function send(string $to): void
    {
        echo "Sending email to $to. The process was successfully!" . PHP_EOL;
    }
}
