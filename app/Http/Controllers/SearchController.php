<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Parents;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function StudentSearch($Searchcase, Request $request)
    {
    	switch($Searchcase){
    		case 'Sibling' :
    			$query = $request['query'];
    			if($query == "")
    				$student = Student::where('id','!=',$request['current'])->get();
    			else
    				$student = Student::where('id','!=',$request['current'])->where('student_nickname','like', '%'.$query.'%')->orWhere('student_given_name','like', '%'.$query.'%')->orWhere('student_surname','like', '%'.$query.'%')->orWhere('student_school','like', '%'.$query.'%')->get();
    			return response()->json(['student' => $student]);
    			break;

	    	default:
	    		break;
    	}

    }
}
