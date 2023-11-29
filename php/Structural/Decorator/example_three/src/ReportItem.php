<?php
namespace DecoratorThree;

class ReportItem
{
    public function __construct(
        private int $sale_id,
        private string $customer_name,
        private string $date,
        private float $amount
    ) {
    }

    public function getSaleId(): int
    {
        return $this->sale_id;
    }

    public function setSaleId(int $sale_id): void
    {
        $this->sale_id = $sale_id;
    }

    public function getCustomerName(): string
    {
        return $this->customer_name;
    }

    public function setCustomerName(string $customer_name): void
    {
        $this->customer_name = $customer_name;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }




}