<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function index(){
        $fruits= array('mango','pineapple','banana','orange');
        return view('welcome',compact('fruits'));
    }
}
