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

    public function bill(){
        return view('pages.bill');
    }
    
    public function create(Request $reqeust){
        //Validation
        $reqeust->validate([
            'username' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required'
        ]);

        $admin = new Admin;
        $admin->username = $reqeust->username;
        $admin->email = $reqeust->email;
        $admin->password = Hash::make($reqeust->password);
        $query = $admin->save();

        if($query){
            return back()->with('success', 'Successfully created');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function check(Request $reqeust){
        $reqeust->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $admin = Admin::where('email','=', $reqeust->email)->first();

        if($admin){
            if(Hash::check($reqeust->password, $admin->password)){
                $reqeust->session()->put('LoggedUser', $user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail', 'Password incorrect');
            }
        }
        else{
            return back()->with('fail', 'Account does not exist');
        }
    }
    
    
    
}
