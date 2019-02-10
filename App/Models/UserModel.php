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
    private $userMapper;
    private $user;
    private $id;
    private $password;
    private $email;
    private $first_name;
    private $second_name;
    private $last_name;
    private $user_ip;
    private $user_agent;

    public function __construct($email = null, $password = null)
    {
        $this->userMapper = new UsersMapper();
        $this->setEmail($email);
        $this->setPassword($password);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->second_name;
    }

    /**
     * @param mixed $second_name
     */
    public function setSecondName($second_name): void
    {
        $this->second_name = $second_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @param mixed $user_ip
     */
    public function setUserIp($user_ip): void
    {
        $this->user_ip = $user_ip;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * @param mixed $user_agent
     */
    public function setUserAgent($user_agent): void
    {
        $this->user_agent = $user_agent;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function authorization($email, $password)
    {
        $email = Validator::clean($email);
        $password = Validator::clean($password);
        if (AuthValidator::validateEmail($email)) {
            $this->user = $this->userMapper->getUser($email);
            $hash = md5($_SERVER['HTTP_USER_AGENT'] . self::getUserIp());

            if (($_SESSION['isAuth'] && $_SESSION['security_result'])) {
                Redirect::home();
            } else {
                if ($email == $this->user->getEmail() && password_verify($password, $this->user->getPassword())) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    $this->userMapper->updateSecurityResult($this->user->getId(), $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $hash);

                    $_SESSION['isAuth'] = true;
                    $_SESSION['user_id'] = $this->user->getId();

                    if ($this->user->getFirstName() == null) {
                        $_SESSION['user_fname'] = 'Ghost';
                    } else {
                        $_SESSION['user_fname'] = $this->user->getFirstName();
                    }
                    Redirect::home();
                } else if ($email != $this->user->getEmail()){
                    Response::send(403, 'We cant find user with this email!');

                    $_SESSION['isAuth'] = false;
                    $_SESSION['security_result'] = false;
                } else if ($email == $this->user->getEmail() && !password_verify($password, $this->user->getPassword())){
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
        if ($this->userMapper->getSecurityResult($id, self::getUserIp(), $_SERVER['HTTP_USER_AGENT'], $hash)[0]['COUNT(*)'] == 1) {
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
        $email = Validator::clean($email);
        $password  = Validator::clean($password);
        if (AuthValidator::validateEmail($email) && AuthValidator::validatePassword($password)){
            if (!$this->userExist($email)) {
                $this->userMapper->userAdd(new UserModel($email, $password));
                $this->user = $this->userMapper->getUserInfo($email);
                $hash = md5($_SERVER['HTTP_USER_AGENT'] . self::getUserIp());
                $this->userMapper->setSecurityResult($this->user->getId(), self::getUserIp(), $_SERVER['HTTP_USER_AGENT'], $hash);
                $this->authorization($this->user->getEmail(), $password);
                unset($_POST);
            } else if ($this->userExist($email)) {
                Response::send(403,'Email already exist!');
            }
        }
    }

    public function userExist($email)
    {
        return $this->userMapper->getUser($email)->getEmail() !== null ? true : false;
    }


    public function isLog()
    {
        if ($_SESSION['isAuth'] && $_SESSION['security_result']) {
            Redirect::home();
        }
    }
}
