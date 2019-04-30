<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class RegController extends Controller
{
    //
    public function index()
    {
    	return view('registration.index');
    }
    public function create(Request $req)
    {

        $this->validate($req, [
            'uname' => 'required',
            'password' => 'required',
            'type' => 'required'
        ]);

    	$user = new users;

    	$user->username = $req->uname;
    	$user->password = $req->password;
    	$user->type = $req->type;

    	$user->save();

    	return redirect()->route('login.index');
    }
}
