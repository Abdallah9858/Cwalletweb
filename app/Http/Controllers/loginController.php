<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogAuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Check if the username is 'abdallah' and password is '1989'
        if ($username === 'abdallah' && $password === '1989') {
            // Redirect to registration route
            return redirect()->route('registration');
        }

        // If credentials don't match, show an error
        return back()->withErrors([
            'username' => 'Invalid credentials.',
        ]);
    }
}