<?php
require 'Calculator.php';
 
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
}
