<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auths.login');
    }
}
