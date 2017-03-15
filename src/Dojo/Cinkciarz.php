<?php
namespace Dojo;

class Cinkciarz
{
    const RATE = 0.5;
    public function sum(Money $moneyA, Money $moneyB, $currency)
    {
        $moneyCurrencyA = $this->exchange($moneyA, $currency);
        $moneyCurrencyB = $this->exchange($moneyB, $currency);

        return new $currency($moneyCurrencyA->getValue() + $moneyCurrencyB->getValue());
    }

    private function exchange(Money $money, $currency)
    {
        if (get_class($money) === $currency) {
            return $money;
        }

        return get_class($money) === Dollar::class
            ? new $currency($money->getValue() / self::RATE)
            : new $currency($money->getValue() * self::RATE);
    }
}