<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Show the login form
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === 'admin') {
            // Set the user_logged_in session variable to true
            $request->session()->put('user_logged_in', true);

            return redirect('/admin'); // Redirect to admin page for admin user
        } else {
            // Set the user_logged_in session variable to true
            $request->session()->put('user_logged_in', true);

            return redirect('/'); // Redirect to home page for all other users
        }
    }

    public function logout(Request $request)
    {
        // Set the user_logged_in session variable to false when the user logs out
        $request->session()->put('user_logged_in', false);

        return redirect('/'); // Redirect to the home page after logging out
    }
}
