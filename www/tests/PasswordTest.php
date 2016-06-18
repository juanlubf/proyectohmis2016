<?php

//define ('MAINDIR', dirname(__FILE__).'/');
//echo MAINDIR;
include_once  (dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Password.php');
//include_once '../src/Password.php';

class PasswordTest extends PHPUnit_Framework_TestCase {
    public function testValidLength() {
        $valPass = new Password();
        $this->assertFalse($valPass->validLength('1234'));
    }
}