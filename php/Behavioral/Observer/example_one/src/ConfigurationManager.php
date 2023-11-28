<?php

namespace ObserverOne;

use ObserverOne\Contracts\ObserverInterface;

/**
 * This class is the subject, it will notify all observers when it changes.
 */
final class ConfigurationManager extends AbstractObservable
{
    private static self $instance;
    private string $date_format;
    private int $money_format;

    private function __construct()
    { }

    public function getMoneyFormat(): int
    {
        return $this->money_format;
    }

    public function setMoneyFormat(int $money_format): void
    {
        $this->money_format = $money_format;
        $this->notifyAll('money_format', $money_format);
    }

    public function getDateFormat(): string
    {
        return $this->date_format;
    }

    public function setDateFormat(string $date_format): void
    {
        $this->date_format = $date_format;
        $this->notifyAll('date_format', $date_format);
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}