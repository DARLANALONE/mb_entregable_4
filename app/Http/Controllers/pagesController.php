<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function app()
    {
        return view('layouts.app');
    }
    public function logout()
    {
        return view('auth.login');
    }

}
