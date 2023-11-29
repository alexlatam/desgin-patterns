<?php

namespace CommandOne\Commands;

use CommandOne\Contracts\CommandInterface;

class ExitCommand implements CommandInterface
{
    public static string $command_name = 'exit';

    public function getCommandName(): string
    {
        return self::$command_name;
    }

    public function execute(array $args, string $out): void
    {
        echo 'Bye!' . PHP_EOL;
    }
}