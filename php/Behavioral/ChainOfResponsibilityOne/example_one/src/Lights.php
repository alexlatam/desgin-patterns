<?php

namespace ChainOfResponsibilityOne;

use ChainOfResponsibilityOne\Contract\AbstractHomeChecker;
use ChainOfResponsibilityOne\DTO\HomeStatus;
use Exception;

/**
 * This class is a component of the chain
 */
final class Lights extends AbstractHomeChecker
{
    /**
     * @throws Exception
     */
    public function check(HomeStatus $home): void
    {
        if (!$home->lightsOff) {
            throw new Exception('The lights are off!! Abort abort.');
        }

        echo "The lights are already turn on\n";

        // Pass for the next component of the chain
        $this->next($home);
    }

}