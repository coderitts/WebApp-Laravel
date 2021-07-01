<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function postlogin(Request $req)
    {
        $req->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $credentials = Auth::attempt(["email" => $req->email,"password" => $req->password]);

        if(!$credentials)
        {
            return redirect()->back();
        }else{
            return redirect("/dashboard");
        }
    }

    public function postregister(Request $req)
    {
        $req->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required"
        ]);

        DB::table("users")->insert([
            "name" => $req->name,
            "email" => $req->email,
            "password" => Hash::make($req->password)
        ]);

        return redirect("/auth/login");
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect("/auth/login");
    }
}
