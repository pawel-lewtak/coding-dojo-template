<?php
namespace Dojo;

class Money
{
    private $value;

    /**
     * @param int $value
     */
    public function __construct($value)
    {
        $this->value = $value;
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
}