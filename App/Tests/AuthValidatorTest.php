<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 13.02.2019
 * Time: 11:50
 */

use Validators\AuthValidator;
use PHPUnit\Framework\TestCase;

class AuthValidatorTest extends TestCase
{

    public function testValidateEmail()
    {
        $this->assertTrue(AuthValidator::validateEmail('smeekl@mail.ru'));
        $this->assertFalse(AuthValidator::validateEmail('dasd.ru'));
    }

    public function testValidatePassword()
    {
        $this->assertTrue(AuthValidator::validatePassword('asdX12'));
        $this->assertFalse(AuthValidator::validatePassword('das'));
        $this->assertFalse(AuthValidator::validatePassword(''));
    }
}
