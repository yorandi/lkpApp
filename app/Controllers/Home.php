<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function register()
    {
        return view('register');
    }
}
