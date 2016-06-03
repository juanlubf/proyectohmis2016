<?php

include_once '../src/Password.php';

class PasswordTest extends PHPUnit_Framework_TestCase {
    public function testValidLength() {
        $valPass = new Password();
        $this->assertFalse($valPass->validLength('1234'));
    }
}