<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Parents;
use App\Models\BillingAccount;

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

    		case 'BillingAccount':
    			$query = $request['query'];
    			if($query == "")
    				$billingaccount = BillingAccount::all();
    			else
    				$billingaccount = BillingAccount::where('first_name','like','%'.$query.'%')->orWhere('last_name','like','%'.$query.'%')->orWhere('email',$query)->orWhere('mobile',$query)->get();
    			
    			return response()->json(['ba' => $billingaccount]);

    		case 'Parent':
    			$query = $request['query'];

    			if($query == "")
    				$parents = Parents::all();
    			else
    				$parents = Parents::where('fName','like','%'.$query.'%')->orWhere('lName','like','%'.$query.'%')->orWhere('email',$query)->orWhere('mobile',$query)->get();
    			
    			return response()->json(['parent' => $parents]);
	    	default:
	    		break;
    	}

    }
}
