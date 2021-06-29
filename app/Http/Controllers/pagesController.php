<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function app()
    {
        return view('layouts.app');
    }
    public function login()
    {
        return view('procfile.logout-other-browser-sessions-form');
    }
    public function doctor()
    {
        return view('layouts.doctor');
    }
}
