<?php

namespace App\Http\Controllers;

class Auth extends Controller
{

    function showLogin(){
        return view('login');
    }

    function processLogin(){
    
    }

    function logout(){

    }

    function register(){
        return view('register');
    }

    function forgot(){
        return view('forgot');
    }
}