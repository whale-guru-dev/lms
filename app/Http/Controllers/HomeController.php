<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Center;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        foreach ($user->center as $center){
            if($center->pivot->center_accessibility_id != 1){
                $centername = $center->center_name;
                break;
            }
        }
        if(!isset($centername))
            echo 'You have not appropriate permission on the Center Module';
        return view('pages.home',['centername'=>$centername,'module'=>'']);
    }
}
