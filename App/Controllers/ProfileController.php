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

    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    function action_profile()
    {
        self::generate('profile', 'profile.php');
    }
}


