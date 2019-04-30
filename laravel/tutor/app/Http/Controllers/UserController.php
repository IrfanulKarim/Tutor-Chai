<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

class UserController extends Controller
{
    //

	public function index(Request $req)
	{
		$users = users::all();

        

        return view('home.profile')
                ->with('users',$users);        



    }

}
