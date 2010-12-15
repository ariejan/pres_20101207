<?php

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.eduhub.nl/");
  }

  public function testMyTestCase()
  {
    $this->open("/");
    $this->click("link=Over Eduhub");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertTrue($this->isTextPresent("Rokin 75"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
  }
}
?>