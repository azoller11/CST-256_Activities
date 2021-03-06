<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\UserModel;
use App\Services\Business\SecurityService;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        Log::info("Entering LoginController::index()");
        
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
        
        $username = $request->input('username');
        $password = $request->input('password');
        Log::info("Parameters are: ",array("username" => $username , "password" => $password));
        echo "Your name is: " . $username . " " . $password;
        echo '<br>';
        
        $data = new UserModel($username, $password);
        //Test for login
        $security = new SecurityService();
        
        if ($security->login($data)) {
            $data = ['username' => $username, 'password' => $password];
            Log::info("Exit LoginController::index() with login passing");
            return view('loginPassed')->with($data);
        }else {
            echo 'Login Fail';
            Log::info("Exit LoginController::index() with login failing");
            return view('login');
            }
           
        
        
        
    }
}
