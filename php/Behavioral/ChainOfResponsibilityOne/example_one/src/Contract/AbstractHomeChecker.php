<?php

namespace ChainOfResponsibilityOne\Contract;

use ChainOfResponsibilityOne\DTO\HomeStatus;

/**
 * This class define how the chain works
 */
abstract class AbstractHomeChecker
{
    protected AbstractHomeChecker $successor;

    /**
     * This is the common method for all the elements of the chain
     * The logic is internal for every element.
     * At the end of the method must be call the next() method
     */
    public abstract function check(HomeStatus $home): void;

    /**
     * set the next component of the chain.
     */
    public function setSuccessor(AbstractHomeChecker $successor): void
    {
        $this->successor = $successor;
    }

    /**
     * this method verify if the successor element exists
     * If already exists, call the check method
     * If not exists, do nothing.
     */
    public function next(HomeStatus $homeChecker): void
    {
        if (isset($this->successor)) {
            $this->successor->check($homeChecker);
        }
    }
}