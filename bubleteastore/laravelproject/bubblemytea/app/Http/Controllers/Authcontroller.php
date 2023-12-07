<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;



class Authcontroller extends Controller
{
    public function dologin(LoginRequest $request){
        $credential = $request->validated();
        if (auth::attempt($credential)){
            $request -> session()->regenerate();
            return redirect()-> intended(route('welcome.command'));
        }
        return to_route("welcome.login")->withErrors([
            "email" => "email invalide",
            "password" => "password incorecte"
        ])->onlyInput('email');
    }
    public function logout() {
        Auth::logout();
        return to_route("welcome.login");
    }
}
