<?php

namespace CommandOne\Contracts;

interface CommandInterface
{
    public function getCommandName(): string;
    public function execute(array $args, string $out): void;
}