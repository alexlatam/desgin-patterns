<?php
declare(strict_types=1);

namespace AdapterOne\Services;

/**
 * Este servicio es propio del SDK de Mailgun
 * Por lo tanto debe adptarse, para que pueda ser usado por el cliente
 * Todos los servicios seran encapsulados en una clase que implementa una interfaz comun.
 * Esto permite que el cliente no tenga que preocuparse por la implementacion de cada servicio
 */
final class MailGun
{
    public function sendGunMail(string $to, string $from, string $subject, string $body): void
    {
        // Logic to send email using GunMail
        // ....
        // ....
        // ....
    }
}