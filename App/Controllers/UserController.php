<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;

use Models\UserModel;

Class UserController extends \Core\Controller
{
    function action_index()
    {
        $model = new UserModel();
        $model->isLog();
        self::generate('auth', 'authentication.php');
    }

    function action_auth()
    {
        $model = new UserModel();
        $model->authorization($_POST['email'], $_POST['password']);
    }

    function action_registration()
    {
        $model = new UserModel();
        $model->isLog();
        self::generate('auth', 'registration.php');
    }

    public function action_reg()
    {
        $model = new UserModel();
        $model->registration($_POST['email'], $_POST['password']);
    }

    function action_logout()
    {
        $model = new UserModel();
        $model->logout();
        self::generate('auth', 'authentication.php');
    }
}
