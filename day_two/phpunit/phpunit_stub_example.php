<?php

class SomeClass {
  public function doSomething() {
    return 'bar';
  }
}

class StubTest extends PHPUnit_Framework_TestCase {
  public function testStub() {
    // Create a stub for the SomeClass class.
    $stub = $this->getMock('SomeClass');
    // $stub = new SomeClass;

    // Configure the stub.
    // $stub->expects($this->any())
    //      ->method('doSomething')
    //      ->will($this->returnValue('foo'));

    // Calling $stub->doSomething() will now return
    // 'foo'.
    $this->assertEquals('foo', $stub->doSomething());
  }
}

?>