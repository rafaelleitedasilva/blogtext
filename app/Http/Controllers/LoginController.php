<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function view()
    {
        return view('authentication.login');
    }
}