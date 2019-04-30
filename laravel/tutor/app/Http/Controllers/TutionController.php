<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tutions;

class TutionController extends Controller
{
    //
    public function index(){

    	$tution = tutions::all();

    	return view('tution.index')->with('tutions', $tution);
    }

}
