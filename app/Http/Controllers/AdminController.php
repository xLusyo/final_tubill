<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function management(){
        return view('pages.management');
    }

    public function client (){
        return view('pages.client');
    }

    public function account (){
        return view('pages.account');
    }

    public function clientreg (){
        return view('pages.clientreg');
    }
    
    public function create(Request $reqeust){
        //Validation
        $reqeust->validate([
            'username' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required'
        ]);

        $admin = new Admin; 
    }

    
}
