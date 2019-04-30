<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\tutions;

class SearchController extends Controller
{
    //
    public function index(){

    	return view('search.index');
    }

    public function search(Request $request)
	{
		if($request->ajax())
			{
				$output="";
				$tutions=DB::table('tutions')->where('class','LIKE','%'.$request->search."%")->get();

		if($tutions){

			foreach ($tutions as $tution => $tution) {
			$output.='<tr>'.
			'<td>'.$tution->id.'</td>'.
			'<td>'.$tution->studentname.'</td>'.
			'<td>'.$tution->class.'</td>'.
			'<td>'.$tution->type.'</td>'.
			'</tr>';
					}
				}

			}

			return Response($output);
   }
}


