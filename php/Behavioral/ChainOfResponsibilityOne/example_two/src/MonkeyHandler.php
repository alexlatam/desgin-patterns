<?php

namespace ChainOfResponsibilityTwo;

use ChainOfResponsibilityTwo\Contracts\AbstractHandler;

/**
 * All Concrete Handlers either handle a request or pass it to the next handler
 * in the chain.
 */
final class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Banana") {
            return "Monkey: I'll eat the " . $request . ".\n";
        }
        return parent::handle($request);
    }
}