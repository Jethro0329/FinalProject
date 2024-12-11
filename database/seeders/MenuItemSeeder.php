<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuItem::create([
            'image' => 'css/bfast.jpg',
            'name' => 'Classic Croissants',
            'price' => '₱150',
            'rating' => 4,
        ]);

        MenuItem::create([
            'image' => 'css/img2.jpg',
            'name' => 'Lavander Latte',
            'price' => '₱120',
            'rating' => 4,
        ]);

        MenuItem::create([
            'image' => 'css/img3.jpg',
            'name' => 'Banana Walnut Muffin',
            'price' => '₱100',
            'rating' => 4,
        ]);

        MenuItem::create([
            'image' => 'css/latte.jpg',
            'name' => 'Chai Latte',
            'price' => '₱120',
            'rating' => 5,

        ]);

        MenuItem::create([
            'image' => 'css/Chicken-salad-croissant.jpg',
            'name' => 'Chicken Salad Croissant',
            'price' => '₱350',
            'rating' => 4,

        ]);

        MenuItem::create([
            'image' => 'css/espresso.jpg',
            'name' => 'Espresso',
            'price' => '₱110',
            'rating' => 4,

        ]);
        
    }
}
