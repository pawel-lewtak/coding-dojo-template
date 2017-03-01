<?php

use Dojo\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testRandom()
    {
        $object = new Example();
        $this->assertEquals(4, $object->random());
    }
}
