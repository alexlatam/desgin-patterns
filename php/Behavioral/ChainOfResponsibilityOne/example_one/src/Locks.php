<?php

namespace ChainOfResponsibilityOne;

use ChainOfResponsibilityOne\Contract\AbstractHomeChecker;
use ChainOfResponsibilityOne\DTO\HomeStatus;
use Exception;

/**
 * This class is a component of the chain
 */
final class Locks extends AbstractHomeChecker
{
    /**
     * @throws Exception
     */
    public function check(HomeStatus $home): void
    {
        if (!$home->locked) {
            throw new Exception('The doors are not locked!! Abort abort.');
        }

        echo "The house is locked!\n";

        // Pass for the next component of the chain
        $this->next($home);
    }

}