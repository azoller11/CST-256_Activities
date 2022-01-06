<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class Login3Controller extends Controller
{
    public function index(Request $request)
    {
        // Usage of path method
        $path = $request->path();
        echo 'Path Method: '.$path;
        echo '<br>';
        
        // Usage of is method
        $method = $request->isMethod('get') ? "GET" : "POST";
        echo 'GET or POST Method: '.$method;
        echo '<br>';
        
        // Usage of url method
        $url = $request->url();
        echo 'URL method: '.$url;
        echo '<br>';
        
        
        $this->validateForm($request);
        
        $username = $request->input('username');
        $password = $request->input('password');
        echo "Your name is: " . $username . " " . $password;
        echo '<br>';
        
        $data = new UserModel($username, $password);
        //Test for login
        $security = new SecurityService();
        
        if ($security->login($data)) {
            $data = ['username' => $username, 'password' => $password];
            return view('loginPassed')->with($data);
        }else {
            echo 'Login Fail';
            return view('login3');
            }
           
        
        
        
    }
    private function validateForm(Request $request)
    {
        // Setup Data Validation Rules for Login Form
        $rules = ['username' => 'Required | Between:4,10 | Alpha',
            'password' => 'Required | Between:4,10'];
        
        // Run Data Validation Rules
        $this->validate($request, $rules);
    }
    
}
