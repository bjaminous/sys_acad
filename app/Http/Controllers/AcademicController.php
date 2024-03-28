<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function index()
    {
       return view ('app.home');
    }
    //

    public function signin()
    {
        return view('app.signin');
    }

    public function login()
    {
        //dd('login');
        return view('layouts.dashboard');
    }

    public function dash()
    {
        return view('layouts.dashboard');
    }

    public function registration()
    {
        return view('layouts.registration');
    }

    public function register()
    {
        return view('layouts.register');
    }

}
