<?php
require 'Calculator.php';
 
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
 
    public function testAdd()
    {
        $this->assertEquals(3, $result);
    }
 
}
