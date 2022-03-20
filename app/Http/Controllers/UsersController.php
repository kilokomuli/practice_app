<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){
        $name='Emma';
        $users= array(
            "name"=> "Mike Nzioki",
            "email" =>"mike@gmail.com",
            "phone"=> "0745454545"
        );
        return view('users', compact('name','users'));
    }
}
