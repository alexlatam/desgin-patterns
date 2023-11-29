<?php

namespace ChainOfResponsibilityTwo;

use ChainOfResponsibilityTwo\Contracts\AbstractHandler;

final class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return "Dog: I'll eat the " . $request . ".\n";
        }
        return parent::handle($request);
    }
}