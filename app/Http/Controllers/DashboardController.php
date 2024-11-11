<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($username)
    {
        return view('dashboard', ['username' => $username]); // Assuming you have a dashboard view
    }

    public function feed($username)
    {
        return view('feed', ['username' => $username]); // Assuming you have a feed view
    }
}
