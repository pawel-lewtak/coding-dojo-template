<?php

use Dojo\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    // This method will be called *before* each test run.
    public function setUp() {}
    
    // This method will be called *after* each test run.
    public function tearDown() {}
    
    public function testRandom()
    {
        $object = new Example();
        $this->assertEquals(4, $object->random());
    }
}
