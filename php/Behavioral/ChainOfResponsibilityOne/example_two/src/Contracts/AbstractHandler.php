<?php

namespace ChainOfResponsibilityTwo\Contracts;

/**
 * The default chaining behavior can be implemented inside a base handler class.
 */
abstract class AbstractHandler implements HandlerInterface
{
    private HandlerInterface $nextHandler;

    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;
        // Returning a handler from here will let us link handlers in a
        // convenient way like this:
        // $monkey->setNext($squirrel)->setNext($dog);
        return $handler;
    }

    public function handle(string $request): ?string
    {
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}