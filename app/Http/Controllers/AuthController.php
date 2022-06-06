<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function index(){
        return view('Auths.login');
    }

    public function register(){
        return view('Auths.register');
    }

    public function Authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError', 'Email Atau Password Salah!!!');

    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required|unique:users|numeric|min:11',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'no_hp' => $validatedData['no_hp'],
            'password' => $validatedData['password'],
        ]);
        // dd($validatedData);

        return redirect('/login')->with('success', 'Pendaftaran Berhasil!!!');

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
