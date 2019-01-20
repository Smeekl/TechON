<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 12.12.18
 * Time: 16:41
 */

namespace Controllers;

use Models\AuthModel;

Class AuthController extends \Core\Controller
{
    function action_auth($email = null)
    {
        $model = new AuthModel();
        $data = $model->Authorization($_POST['email'], $_POST['password']);
        self::generate('auth', 'authentication.php');
    }

}
