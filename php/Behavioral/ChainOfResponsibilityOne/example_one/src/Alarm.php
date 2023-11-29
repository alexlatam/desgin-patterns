<?php

namespace ChainOfResponsibilityOne;

use ChainOfResponsibilityOne\Contract\AbstractHomeChecker;
use ChainOfResponsibilityOne\DTO\HomeStatus;
use Exception;

/**
 * This class is a component of the chain
 */
final class Alarm extends AbstractHomeChecker
{
    /**
     * @throws Exception
     */
    public function check(HomeStatus $home): void
    {
        if (!$home->alarmOn) {
            throw new Exception('The alarm has not been set!! Abort abort.');
        }

        echo "The alarm is already set\n";

        // Pass for the next component of the chain
        $this->next($home);
    }

}