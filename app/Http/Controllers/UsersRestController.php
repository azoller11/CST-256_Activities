<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "Hello from the UsersRestController";
    }

   
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo "UsersRestController ID: " . $id;
    }

   
   
}
