<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        // return "Welcome";
        return view('user');
    }
                // function aboutUser(){
                //     return "This is about user";
                // }
    function getUserName($name){
        // return "Hello this is ". $name;
        return view('getuser', ['name'=>$name]);
    }
    function login(){
        return view('admin.login');
    }
    // function about($name){
    //     return view('about', 
    //     ['name'=>'Priya', 
    //     'rand'=>rand(),
    //     'user'=>['Devanshi', 'Raya', 'Riya']
    //     ]);
    // }
    function aboutUser(){
        return view('about', 
        ['name'=>'Priya', 
        'rand'=>rand(),
        'user'=>['Devanshi', 'Raya', 'Riya']
        ]);
    }
}