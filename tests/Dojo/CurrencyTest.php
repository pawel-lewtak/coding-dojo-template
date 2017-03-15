<?php

use Dojo\Dollar;
use Dojo\Euro;
use Dojo\Money;

class CurrencyTest extends PHPUnit_Framework_TestCase
{
    public function cases()
    {
        return [
            [new Dollar(5), new Euro(10), new Dollar(10)],
            [new Dollar(3), new Euro(4), new Dollar(5)],
            [New Euro(4), new Euro(5), new Euro(9)],
            [New Euro(4), new Dollar(3), new Dollar(5)],
            [new Dollar(3), new Euro(4), new Euro(10)],
            [new Dollar(1), new Dollar(1), new Euro(4)],
            [New Euro(1), new Euro(1), new Dollar(1)],
//            [New Dollar(1), new Euro(2), new Frank(6 * 1 + 4 * 2)],
        ];
    }

    public function testCalculation()
    {
        $calculationMoney = new Money(5);
        $this->assertEquals(10, $calculationMoney->multiply(2));
    }

    /**
     * @param $money1
     * @param $money2
     * @param $expected
     * @dataProvider cases
     */
    public function testAddingMoney($money1, $money2, $expected){
        $cinkciarz = new \Dojo\Cinkciarz();

        $result = $cinkciarz->sum($money1, $money2, get_class($expected));
        $this->assertInstanceOf(get_class($result), $expected);
        $this->assertEquals($expected->getValue(), $result->getValue());
    }
}
