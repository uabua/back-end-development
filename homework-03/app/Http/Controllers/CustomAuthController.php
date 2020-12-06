<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date:Y-m-d'],
            'gender' => ['required', 'string', 'max:1'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $this->login($request);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back();
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back();
        }

        Auth::loginUsingId($user->id);

        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function clickMe()
    {
        return view('click-me');
    }
}
