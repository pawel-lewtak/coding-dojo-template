<?php
namespace Dojo;

class Cinkciarz
{
    const RATES = [
        Currency::EURO => [
            Currency::DOLLAR => 0.5,
            Currency::FRANK => 2.5,
            ],
        Currency::FRANK => [
            Currency::DOLLAR => 0.2,
            Currency::EURO => 0.4,
        ],
        Currency::DOLLAR => [
            Currency::EURO => 2,
            Currency::FRANK => 5,
        ],
    ];
    public function sum(Money $moneyA, Money $moneyB, $currency)
    {
        $moneyCurrencyA = $this->exchange($moneyA, $currency);
        $moneyCurrencyB = $this->exchange($moneyB, $currency);

        return new Money($moneyCurrencyA->getValue() + $moneyCurrencyB->getValue(), $currency);
    }

    public function exchange(Money $money, $currency)
    {
        if ($money->getCurrency() === $currency) {
            return $money;
        }

        $rate = self::RATES[$money->getCurrency()][$currency];

        return new Money($money->getValue() * $rate, $currency);
    }
}