<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ShowLogin()
    {
        if (session()->has('user')) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $user = DB::table('users')->where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            $request->session()->regenerate(); // important for security
            session(['user' => $user]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function ShowRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $userId = DB::table('users')->insertGetId([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user = DB::table('users')->where('id', $userId)->first();

        session(['user' => $user]);
        $request->session()->regenerate(); // prevent session fixation

        return redirect()->route('dashboard');
    }

    public function Logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('ShowLogin');
    }

    public function welcome()
    {
        if (!session()->has('user')) {
            return redirect()->route('ShowLogin');
        }
        return view('dashboard.welcome');
    }

    public function index(Request $request)
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }
}
