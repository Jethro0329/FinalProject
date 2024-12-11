<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
        ]);

        // Check if user already exists by name
        $user = User::where('name', $request->name)->first();

        if (!$user) {
            // If user doesn't exist, create a new user
            $user = User::create([
                'name' => $request->name,
                'birthday' => $request->birthday,
            ]);
        }

        // Log the user in
        auth()->login($user);

        // Redirect to the homepage with the 'username' parameter
        return redirect()->route('homepage', ['username' => $user->name]);
    }
}