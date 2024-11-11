<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($username)
    {
        return view('homepage', ['username' => $username]);
    }
}
