<?php

class Subject {
  protected $observers = array();

  public function attach(Observer $observer) {
    $this->observers[] = $observer;
  }

  public function doSomething() {
    $this->notify('something');
  }

  protected function notify($argument) {
    foreach ($this->observers as $observer) {
      $observer->update($argument);
    }
  }
}

class Observer {
  public function update($argument) {
    // Do something.
  }
}

class SubjectTest extends PHPUnit_Framework_TestCase {
  public function testObserversAreUpdated() {
    $observer = $this->getMock('Observer', array('update'));

    $observer->expects($this->once())
             ->method('update')
             ->with($this->equalTo('something'));

    $subject = new Subject;
    $subject->attach($observer);

    $subject->doSomething();
  }
}

?>