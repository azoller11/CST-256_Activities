<?php
namespace App\Models;
class UserModel {
    
    private $username;
    private $password;
    
    function __construct($user, $pass) {
        $this->username = $user;
        $this->password = $pass;
    }
    
    function username() {
        return $this->username;
    }
    function password() {
        return $this->password;
    }
    
}