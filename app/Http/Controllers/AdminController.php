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

    public function bill(){
        return view('pages.bill');
    }
    
    public function create(Request $reqeust){
        //Validation
        $data = $reqeust->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile_no' => 'required'
        ]);

<<<<<<< HEAD
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
    
    
=======
        $store = Client::clientreg($data);
        return view('/management')->with('success', 'Client Register successfully');
    }

    // public function destroy($id)
    // {
    //     $client = Client::findOrFail($id);
    //     $game->delete();

    //     return view('/management')->with('success', 'Client is successfully deleted');
    // }

    

>>>>>>> 11ae30fa8687f0fd04c2635f439488e526a3d8f5
    
}
