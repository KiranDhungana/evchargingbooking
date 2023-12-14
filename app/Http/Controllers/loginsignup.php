<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class loginsignup extends Controller
{
    // public function __construct()
    // {
    //     // dd("nepal");
    //     $this->middleware('auth');
    // }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email', 'password');
        $userData = User::where('email', $request->email)->first();
        // dd($userData->role);
        if (Auth::attempt($userCredential) && $userData->role == 1 && $userData->is_verified == 1) {
            return redirect('/superadmin/dashboard');

            // return view('superadmin.homepage');
        } else if ($userData && $userData->is_verified == 0) {
            $this->sendOtp($userData);
            return redirect("/verification/" . $userData->id);
        } else if (Auth::attempt($userCredential) && $userData->role == 1) {
            return redirect('/dashboard');
        } else {
            return back()->with('error', 'Username & Password is incorrect');
        }
    }
}