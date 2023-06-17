<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=> 'required|max:255',
            'lastname'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'password'=> 'required|confirmed'
        ] );

        User::create(
            [         //store user
                'firstname' => $request-> firstname,
                'lastname' => $request-> lastname,
                'email' => $request-> email,
                // 'password' => Hash::make($request-> password)
                'password' => bcrypt($request-> password)
            ]
        );

        auth()->attempt($request->only('email','password'));
        
        return view('auth.login');
    }
}

