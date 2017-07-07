<?php
use PHPUnit\Framework\TestCase;

require_once "exercise.php";

class Evaluate extends TestCase {

  public function testName() {
    $this->assertTrue(isset($name), "You must declare name");
    $this->assertEquals("John Snow", $name, "name must be John Snow");
  }

  public function testAge() {
    $this->assertTrue(isset($age), "You must declare age");
    $this->assertEquals(29, $name, "age must be 29");
  }
}
