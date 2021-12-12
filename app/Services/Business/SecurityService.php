<?php
namespace App\Services\Business;
use App\Models\UserModel;
use App\Services\Data\SecurityDAO;

class SecurityService {
    
   
    
    public function login(UserModel $user) {
        $data = new SecurityDAO();
        return $data->findByUser($user);
        
    }
}