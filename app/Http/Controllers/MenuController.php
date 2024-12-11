<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuController extends Controller
{
    public function showMenu($username)
    {
        // Fetch the first 6 menu items from the database
        $menuItems = MenuItem::take(6)->get();

        return view('menu', [
            'menuItems' => $menuItems, 
            'username' => $username
        ]);
    }
}
