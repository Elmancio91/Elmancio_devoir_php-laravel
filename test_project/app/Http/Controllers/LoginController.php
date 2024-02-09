<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(LoginRequest $request){
        $connection =  $request->only('email', 'password');
        if(Auth::attempt($connection)){
            return redirect()->route('home');
        }

        return back()->withErrors((['loginError' => "Email ou mot de passe incorrect."]));
    }

    public function register(CreateRequest $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return view('login');
    }


    public function getRegister(){
        return view('register');
    }
}
