<?php
namespace Dojo;

class Money
{
    private $value;
    private $currency;

    /**
     * Money constructor.
     * @param $value
     * @param $currency
     */
    public function __construct($value, $currency)
    {
        $this->value = $value;
        $this->currency = $currency;
    }

    /**
     * @param int $n
     *
     * @return int
     */
    public function multiply($n)
    {
        return $this->value * $n;
    }

    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }


}