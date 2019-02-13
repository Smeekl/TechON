<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 13.02.2019
 * Time: 12:43
 */

use Models\UserModel;
use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
    private $userModel;

    public function setUp()
    {
        $this->userModel = new UserModel();
    }

    public function testIsLog()
    {
        $this->assertFalse($this->userModel->isLog());
    }


    public function testUserExist()
    {
        $this->assertTrue($this->userModel->userExist('smeekl@mail.ru'));
        $this->assertFalse($this->userModel->userExist('dsadx123@mail.ru'));
    }
}
