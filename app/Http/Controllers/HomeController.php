<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function nav_login()
    {
        return view('template.layouts.nav_login');
    }
}
