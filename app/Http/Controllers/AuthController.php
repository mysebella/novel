<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("ui.auth.login");
    }

    public function register()
    {
        return view("ui.auth.register");
    }
}
