<?php

use Dojo\Currency;
use Dojo\Money;

class CurrencyTest extends PHPUnit_Framework_TestCase
{
    public function cases()
    {
        return [
            [new Money(5, Currency::DOLLAR), new Money(10, Currency::EURO), new Money(10, Currency::DOLLAR)],
            [new Money(3, Currency::DOLLAR), new Money(4, Currency::EURO), new Money(5, Currency::DOLLAR)],
            [New Money(4, Currency::EURO), new Money(5, Currency::EURO), new Money(9, Currency::EURO)],
            [New Money(4, Currency::EURO), new Money(3, Currency::DOLLAR), new Money(5, Currency::DOLLAR)],
            [new Money(3, Currency::DOLLAR), new Money(4, Currency::EURO), new Money(10, Currency::EURO)],
            [new Money(1, Currency::DOLLAR), new Money(1, Currency::DOLLAR), new Money(4, Currency::EURO)],
            [New Money(1, Currency::EURO), new Money(1, Currency::EURO), new Money(1, Currency::DOLLAR)],
            [New Money(1, Currency::DOLLAR), new Money(2, Currency::EURO), new Money(10, Currency::FRANK)],
            [New Money(5, Currency::FRANK), new Money(2, Currency::EURO), new Money(2, Currency::DOLLAR)],
        ];
    }

    public function testCalculation()
    {
        $calculationMoney = new Money(5, Currency::DOLLAR);
        $this->assertEquals(10, $calculationMoney->multiply(2));
    }

    /**
     * @param $money1
     * @param $money2
     * @param $expected
     * @dataProvider cases
     */
    public function testAddingMoney(Money $money1, Money $money2, Money $expected){
        $cinkciarz = new \Dojo\Cinkciarz();

        $result = $cinkciarz->sum($money1, $money2, $expected->getCurrency());
        $this->assertEquals($result->getCurrency(), $expected->getCurrency());
        $this->assertEquals($expected->getValue(), $result->getValue());
    }

    public function testConversion() {
        $cinkciarz = new \Dojo\Cinkciarz();

        $this->assertEquals(
            $cinkciarz->exchange(
                new Money(1, Currency::DOLLAR),
                Currency::EURO
            ),
            new Money(2, Currency::EURO)
        );
    }
}
