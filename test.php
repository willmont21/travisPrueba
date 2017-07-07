<?php
use PHPUnit\Framework\TestCase;

class Evaluate extends TestCase {

  public function testHelloWorld() {
    ob_start();
    require "hello_world.php";
    $output = ob_get_clean();
    $this->assertEquals("Hello World!", $output, "You must print Hello World");
  }
}
