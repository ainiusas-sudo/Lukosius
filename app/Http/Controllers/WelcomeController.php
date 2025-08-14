<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $realName = strtolower(trim($request->input('real_name')));

        if ($realName === 'lukosius') {
            session(['user_role' => 'admin', 'user_name' => $request->input('real_name')]);
            return redirect()->route('dashboard')->with('success', 'Welcome to the party! 🎉');
        } elseif ($realName === 'chebra') {
            session(['user_role' => 'viewer', 'user_name' => $request->input('real_name')]);
            return redirect()->route('dashboard')->with('success', 'Welcome to the party! 🎉');
        }

        return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
    }
}
