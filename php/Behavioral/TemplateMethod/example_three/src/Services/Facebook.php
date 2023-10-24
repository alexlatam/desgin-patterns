<?php

namespace TemplateMethodThree\Services;

use TemplateMethodThree\SocialNetwork;
use function TemplateMethodThree\Utils\simulateNetworkLatency;

/**
 * Esta clase implementa la API de Facebook (Facebook.php).
 * En este caso se esta extendiendo de la clase abstracta SocialNetwork.
 * Esta clase abstracta contiene el template method.
 */
final class Facebook extends SocialNetwork
{
    public function logIn(string $userName, string $password): bool
    {
        echo "\nChecking user's credentials...\n";
        echo "Name: " . $this->username . "\n";
        echo "Password: " . str_repeat("*", strlen($this->password)) . "\n";

        simulateNetworkLatency();

        echo "\n\nFacebook: '" . $this->username . "' has logged in successfully.\n";

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "Facebook: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Facebook: '" . $this->username . "' has been logged out.\n";
    }
}