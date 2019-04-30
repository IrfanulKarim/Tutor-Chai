<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index(){

    	return view('login.index');
    }

    public function verify(Request $req)
       {
        
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = DB::table('users')->where('username', $req->username)
            ->where('password', $req->password)
            ->first();

    	if($user){
            $req->session()->put('user', $user);
            $req->session()->put('id', $user->id);
    		return redirect()->route('home.index');
    	}else{

            $req->session()->flash('msg', "Invalid username/password");
    		return redirect('/login');
            //return view('login.index');
    	}
    }
}
