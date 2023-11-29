<?php

namespace src;

use CommandOne\Commands\ExitCommand;
use CommandOne\Contracts\CommandInterface;
use Exception;

class CommandManager
{
    private static self $commandManger;
    private static array $commands;

    private function __construct()
    {
        $this->register(ExitCommand::$command_name, new ExitCommand());
    }

    public static function getInstance(): self
    {
        if (!isset(self::$commandManger)) {
            self::$commandManger = new self();
        }

        return self::$commandManger;
    }

    public function register(string $commandName, CommandInterface $command): void
    {
        self::$commands[$commandName] = $command;
    }

    /**
     * @throws Exception
     */
    public function getCommand(string $commandName): CommandInterface
    {
        if (!isset(self::$commands[$commandName])) {
            throw new Exception('Command not found');
        }
        return self::$commands[$commandName];
    }
}