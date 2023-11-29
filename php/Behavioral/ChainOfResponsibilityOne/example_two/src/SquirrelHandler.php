<?php

namespace ChainOfResponsibilityTwo;

use ChainOfResponsibilityTwo\Contracts\AbstractHandler;

final class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Nut") {
            return "Squirrel: I'll eat the " . $request . ".\n";
        }
        return parent::handle($request);
    }
}