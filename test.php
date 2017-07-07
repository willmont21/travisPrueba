<?php
use PHPUnit\Framework\TestCase;

require_once "hello_world.php";

class Evaluate extends TestCase {

  public function testHelloWorld() {
    ob_start();
    helloWorld();
    $output = ob_get_clean();
    $this->assertEquals("Hello World!", $output, "You must print Hello World");
  }
}
