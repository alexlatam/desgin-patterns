<?php

namespace TemplateMethodThree;

/**
 * La clase abstracta que contiene el Template Method y los metodos que seran usados por el Template Method.
 */
abstract class SocialNetwork
{
    public function __construct(protected string $username, protected string $password)
    {
    }

    /**
     * Este sera el metodo plantilla [Template Method].
     * Este metodo define un orden en que los metodos deben ser ejecutados.
     * Este metodo NO puede ser modificado por las subclases.
     */
    public function post(string $message): bool
    {
        // No lofeamos antes de enviar el mensaje.
        if ($this->logIn($this->username, $this->password)) {
            // Enviamos el mensaje.
            $result = $this->sendData($message);
            // Cerramos session despues de enviar el mensaje.
            $this->logOut();

            // Devolvemos el resultado de enviar el mensaje.
            return $result;
        }
        // Si no se logeo devolvemos false.
        return false;
    }

    /**
     * Los metodos que seran usados en el Template Method.
     * Estos metodos deben ser implementados por las subclases.
     */
    abstract public function logIn(string $userName, string $password): bool;

    abstract public function sendData(string $message): bool;

    abstract public function logOut(): void;
}