<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'Hello World';
});

Route::get('/test', 'TestController@test');
Route::get('/test2', 'TestController@test2');
Route::post('/whoami','WhatsMyNameController@index'); 
Route::get('/askme', function () { return view('whoami'); });
Route::get('/login', function () { return view('login'); });
Route::post('/dologin','LoginController@index'); 
Route::get('/login2', function ()
{
    return view('login2');
});

Route::get('/login3', function ()
{
    return view('login3');
});
Route::post('/dologin3','Login3Controller@index'); 
Route::resource('/usersrest', 'UsersRestController'); 