<?php

use Dojo\Example;

class ExampleTest extends PHPUnit_Framework_TestCase
{
    public function testRandom()
    {
        $object = new Example();
        $this->assertEquals(4, $object->random());
    }
}
