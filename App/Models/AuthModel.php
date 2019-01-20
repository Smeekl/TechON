<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 24.12.2018
 * Time: 13:52
 */

namespace Models;

use DataMapping\UsersMapper;


Class AuthModel extends \Core\Model
{
    private $user;

    public function __construct()
    {
        $this->user = new UsersMapper();
    }

    public function Authorization($email, $password)
    {
        $data = $this->user->getUser($email);
        $hash = md5($data[0]['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

        if($_SESSION['isAuth']){
            header("Location: http://techon");
        } else {
        
        if ($email == $data[0]['email'] && password_verify($password, $data[0]['password'])){
            if(!isset($_SESSION)){
                session_start();
            }
            $this->user->setSecurityResult($data[0]['id'], $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $hash);

            $_SESSION['isAuth'] = true;
            $_SESSION['user_id'] = $data[0]['id'];
            $_SESSION['user_fname'] = $data[0]['first_name'];
        } else {
            $_SESSION['isAuth'] = false;
            $_SESSION['security_result'] = false;
        }}

        return $_SESSION['isAuth'];
    }

    private function isVerify($email,$hash){
        if($this->user->getSecurityResult($email, $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $hash)[0]['COUNT(*)'] == 1){
         return true;
        } else {
            return false;
        }
    }

}
