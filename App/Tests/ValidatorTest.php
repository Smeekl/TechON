<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 13.02.2019
 * Time: 12:32
 */

use Core\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{

    public function testClean()
    {
        $this->assertEquals('smeekl@mail.ru', Validator::clean('smeekl@mail.ru\ '));
    }

    public function testCheck_length()
    {
        $this->assertTrue(Validator::check_length(3,5, 'pass'));
        $this->assertFalse(Validator::check_length(3,5, 'password'));
    }
}
