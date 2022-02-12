<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;
use App\Models\Client;

class AdminController extends Controller
{


    // public function index()
    // {
    //     $clients = Client::all();
    //     return view('pages.management', compact('clients'));
    // }


    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    // public function management(){
    //     $clients = Client::all();
    //     return view('pages.management', compact('clients'));
    // }

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
        $data = $reqeust->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile_no' => 'required'
        ]);

        $store = Client::clientreg($data);
        return view('/management')->with('success', 'Client Register successfully');
    }

    // public function destroy($id)
    // {
    //     $client = Client::findOrFail($id);
    //     $game->delete();

    //     return view('/management')->with('success', 'Client is successfully deleted');
    // }

    

    
}
