<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->firstname === "root"){

            return view('admin.admindash');
        }
        else{
            return view('post/login');
        }
    }
    public function listMenus()
{
    if (Auth::user()->firstname === "root"){

        return view('admin.menu.list');
    }
    else{
        return view('post/login');
    }
}
}
