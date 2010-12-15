<?php

require_once("calculator.php");

class CalculatorTest extends PHPUnit_Framework_TestCase {
  public function setUp()
  {
    $this->calculator = new Calculator();
  }
  
  public function testDivideByZero()
  {
    $this->setExpectedException('Exception');
    $this->calculator->divide(2, 0);
  }
  
  public function testDivideByNegativeNumber()
  {
    $value = $this->calculator->divide(2, -10);
    
    $this->assertEquals($value, -0.2, "Dit ging niet goed");
  }

  // testDivideByPositiveNumber
  // testDivideByString
  
  public function testDivideByString()
  {
    $this->setExpectedException('Exception');
    $value = $this->calculator->divide(2, "foo");
  }
}
?>