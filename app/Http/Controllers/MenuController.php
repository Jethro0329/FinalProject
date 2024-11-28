<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showMenu($username)
    {
        // Simulate data from a database
        $menuItems = [
            [
                'image' => 'css/bfast.jpg',
                'name' => 'Classic Croissants',
                'price' => '₱150',
                'rating' => 4,
            ],
            [
                'image' => 'css/img2.jpg',
                'name' => 'Lavander Latte',
                'price' => '₱120',
                'rating' => 4,
            ],
            [
                'image' => 'css/img3.jpg',
                'name' => 'Banana Walnut Muffin',
                'price' => '₱100',
                'rating' => 4,
            ],
            [
                'image' => 'css/img4.jpg',
                'name' => 'Chai Latte',
                'price' => '₱120',
                'rating' => 5,
            ],
            [
                'image' => 'css/img5.jpg',
                'name' => 'Chicken Salad Croissant',
                'price' => '₱350',
                'rating' => 4,
            ],
            [
                'image' => 'css/img6.jpg',
                'name' => 'Espresso',
                'price' => '₱110',
                'rating' => 4,
            ],
        ];

        // Limit to 6 items using a for loop
        $limitedItems = [];
        for ($i = 0; $i < min(count($menuItems), 6); $i++) {
            $limitedItems[] = $menuItems[$i];
        }

        return view('menu', [
            'menuItems' => $limitedItems, 
            'username' => $username
        ]);
    }
}
