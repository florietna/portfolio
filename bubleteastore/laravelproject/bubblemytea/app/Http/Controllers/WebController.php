<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class WebController extends Controller
{

    public function show1(){

        return view('post/welcome');
    }
    public function show2(){
        if(Auth::guest()){
        return view('post/login');
        }
        else {
            return to_route('profile');
        }
    }
    public function show3(){

        if(Auth::guest()){
            return view('post/signin');
        }
        else {
            return to_route('profile');
        }
    }


    public function signin(Request $request){
        $firstname = $request->input('username');
        $lastname = $request->input('lastname') ? $request->input('lastname'): "vide" ;
        $password = $request->input('password');
        $email =$request->input('email');
        DB::table('users')->insert([
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => Hash::make($password),
            'created_at'=>now(),
            'updated_at' =>now(),
        ]);
        return to_route("welcome.login")->withDefault([
            'email' => $email,
            ])->onlyInput('email');
    }
    public function profile(){
        if (Auth::user()){

            return view('post/profile');
        }
        else{
            return view('post/login');
        }
    }
    public function modifprofile(Request $request){
        $firstname = $request->input('username');
        $lastname = $request->input('lastname') ? $request->input('lastname'): "vide" ;
        $password = $request->input('password');
        $email =$request->input('email');
        $password_confirmation = $request->input("password_confirmation");
        if ($password !=$password_confirmation){
            return to_route("profile")->withErrors([
                "password" => "password not match"
            ])->onlyInput('password');
        }
        DB::table('users')->update([
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => Hash::make($password),
        ]);return to_route("profile");

    }
    public function about(){
        return view('post.about');

    }
}
