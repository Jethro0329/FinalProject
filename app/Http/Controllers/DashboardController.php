<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($username)
    {
        return view('dashboard', ['username' => $username]);
    }

}