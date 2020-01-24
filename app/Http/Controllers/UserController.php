<?php

namespace App\Http\Controllers;

use App\Phone;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postUser(Request $request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }

    public function getUser($user)
    {
        return Phone::with('user')->find($user);
    }
    

    public function registerPage()
    {
        return view('register');
    }
}
