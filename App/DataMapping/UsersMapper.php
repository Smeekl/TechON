<?php
/**
 * Created by PhpStorm.
 * User: Smeekl
 * Date: 17.01.2019
 * Time: 23:00
 */

namespace DataMapping;

use PDO;

class UsersMapper
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = \Core\DB::instance();
    }

    public function getUser($email)
    {
        $query = $this->pdo->prepare('SELECT users.id,email,password,first_name,second_name,last_name, user_session.ip_adress,user_agent FROM users INNER JOIN user_session ON user_session.user_id = users.id WHERE email = :email');
        $query->execute(array(':email' => $email));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getSecurityResult($id, $ip, $user_agent, $hash)
    {
        $query = $this->pdo->prepare('
        SELECT COUNT(*) FROM users 
        INNER JOIN user_session ON user_session.user_id = users.id 
        WHERE users.id = :id AND user_session.ip_adress = :ip
        AND user_session.user_agent = :user_agent
        AND user_session.hash = :hash;
        ');
        $query->execute(array(':id' => $id, ':ip' => $ip, ':user_agent' => $user_agent, ':hash' => $hash));
        $row = $query->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

    public function setSecurityResult($id, $ip, $user_agent, $hash)
    {
        $query = $this->pdo->prepare('
        UPDATE user_session 
        SET ip_adress= :ip, user_agent= :user_agent, hash= :hash
        WHERE user_session.user_id = :id;
        ');
        $query->execute(array(':id' => $id, ':user_agent' => $user_agent, ':ip' => $ip, ':hash' => $hash));
        unset($query);
    }


    public function userAdd($email, $password)
    {
        $query = $this->pdo->prepare('
            INSERT INTO users 
            (email, password) 
            VALUES (:email, :password);
            ');
        $query->execute(array(':email' => $email, ':password' => password_hash($password, PASSWORD_DEFAULT)));
        unset($query);
    }
}