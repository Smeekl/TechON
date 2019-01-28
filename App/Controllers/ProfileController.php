<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 28.01.2019
 * Time: 6:53
 */

namespace Controllers;

use Models\UserModel;

Class ProfileController extends \Core\Controller
{


    function action_profile()
    {
        $user = new UserModel();
        self::generate('profile', 'profile.php');
    }
}


