<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function login_submit()
    {
        echo "login submit";
    }

    public function logout()
    {
        echo "logout";
    }

    
}