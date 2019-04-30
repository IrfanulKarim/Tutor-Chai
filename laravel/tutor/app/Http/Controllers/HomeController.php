<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $req){

		//$req->session()->put('uname', 'admin');
			
	//	$data = $this->studentList();
		return view('home.index');
	}
}
