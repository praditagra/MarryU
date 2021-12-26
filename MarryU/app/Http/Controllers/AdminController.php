<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login_index()
    {
        return view('Home.loginadmin');
    }

    public function login()
    {
    }
}
