<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 24.12.2018
 * Time: 13:52
 */

namespace Models;

use Core\Redirect;
use Core\Response;
use Core\Validator;
use DataMapping\UsersMapper;
use Validators\AuthValidator;


Class UserModel extends \Core\Model
{
    private $user;

    public function __construct()
    {
        $this->user = new UsersMapper();
    }

    public function authorization($email, $password)
    {
        $email = Validator::clean($email);
        $password = Validator::clean($password);
        if (AuthValidator::validateEmail($email)) {
            $data = $this->user->getUser($email);
            $hash = md5($_SERVER['HTTP_USER_AGENT'] . self::getUserIp());

            if (($_SESSION['isAuth'] && $_SESSION['security_result'])) {
                Redirect::home();
            } else {
                if ($email == $data[0]['email'] && password_verify($password, $data[0]['password'])) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }

                    $this->user->updateSecurityResult($data[0]['id'], $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $hash);

                    $_SESSION['isAuth'] = true;
                    $_SESSION['user_id'] = $data[0]['id'];

                    if ($data[0]['first_name'] == null) {
                        $_SESSION['user_fname'] = 'Ghost';
                    } else {
                        $_SESSION['user_fname'] = $data[0]['first_name'];
                    }
                    Redirect::home();
                } else if ($email != $data[0]['email']){
                    Response::send(403, 'We cant find user with this email!');

                    $_SESSION['isAuth'] = false;
                    $_SESSION['security_result'] = false;
                } else if ($email == $data[0]['email'] && !password_verify($password, $data[0]['password'])){
                    Response::send(403, 'Incorrect password');

                    $_SESSION['isAuth'] = false;
                    $_SESSION['security_result'] = false;
                }
            }
        }
        return $_SESSION['isAuth'];
    }

    public function isVerify($id)
    {
        $hash = md5($_SERVER['HTTP_USER_AGENT'] . self::getUserIp());
        if ($this->user->getSecurityResult($id, self::getUserIp(), $_SERVER['HTTP_USER_AGENT'], $hash)[0]['COUNT(*)'] == 1) {
            return $_SESSION['security_result'] = true;
        } else {
            return $_SESSION['security_result'] = false;
        }
    }

    public static function getUserIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function logout()
    {
        $_SESSION['security_result'] = false;
        $_SESSION['isLogged'] = false;
        session_destroy();
        unset($_SESSION);
        Redirect::home();
    }

    public function registration($email, $password)
    {

        if (!$this->userExist($email) && $email != '') {
            $this->user->userAdd($this->getValidEmail($email), $password);
            $hash = md5($_SERVER['HTTP_USER_AGENT'] . self::getUserIp());
            $data = $this->user->getUserInfo($email);
            $this->user->setSecurityResult($data[0]['id'], self::getUserIp(), $_SERVER['HTTP_USER_AGENT'], $hash);
            $this->authorization($email, $password);
            unset($_POST);
            Redirect::home();
        } else if (!empty($email)) {
            Redirect::page('authentication');
        }
    }

    public function userExist($email)
    {
        return $this->user->getUser($email)[0] !== null ? true : false;
    }

    public function getValidEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        } else {
            return false;
        }
    }

    public function isLog()
    {
        if ($_SESSION['isAuth'] && $_SESSION['security_result']) {
            Redirect::home();
        }
    }
}
