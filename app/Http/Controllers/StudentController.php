<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\BillingAccount;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index()
    {
        $students = Student::all();
    	return view('pages.student.listing',['students' => $students]);
    }

    public function summary($id)
    {
        $student = Student::where('id', $id)->first();
        $bas = BillingAccount::all();
    	return view('pages.student.summary',['student' => $student,'bas'=>$bas]);
    }

    public function classes($id)
    {
        $student = Student::where('id', $id)->first();
        
    	return view('pages.student.classes',['student' => $student]);
    }

    public function enrolment($id)
    {
        $student = Student::where('id', $id)->first();
        return view('pages.student.enrolment',['student' => $student]);
    }

    public function newstudent(Request $request)
    {
        if($request){
            $student = new Student;
            $student->student_nickname = $request['nickname'];
            $student->student_given_name = $request['gName'];
            $student->student_surname = $request['sName'];
            $student->student_gender = $request['gender'];
            // $student->student_billing_account_id = 
        }
    }

    public function editstudent($id, Request $request)
    {
        if($request){
            $student = Student::find($id);
            $student->student_nickname = $request['nickname'];
            $student->student_given_name = $request['gName'];
            $student->student_surname = $request['sName'];
            $student->student_gender = $request['gender'];
            $student->student_dob = $request['dob'];
            $student->student_enrolled_since = $request['enrolled_since'];
            $student->student_school = $request['school'];
            $student->student_contract = isset($request['contract'])?$request['contract']:null;
            $student->student_billing_account_id = $request['billingaccount'];
            if($student->student_profile_pic == 'mdefault.png' || $student->student_profile_pic == 'fdefault.png' || $student->student_profile_pic == null){
                if($request['gender'] == 0){
                    $student->student_profile_pic = 'mdefault.png';
                }else {
                    $student->student_profile_pic = 'fdefault.png';
                }
            }
                
            $student->save();

            return redirect('Student/'.$student->id.'/Summary');
        }
    }

    public function changepropic($id, Request $request)
    {
        $student = Student::find($id);
        if($request){
            if($request->hasFile('propic')){
                $this->validate($request, [
                    'propic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $profileImage = $request->file('propic');

                if($student->student_profile_pic != 'mdefault.png' && $student->student_profile_pic != 'fdefault.png')
                    $name = $student->student_profile_pic;

                else 
                    $name = $this->generateRandomString().'.'.$profileImage->getClientOriginalExtension();

                $student->student_profile_pic = $name;

                
                $destinationPath = public_path('assets/propic');
                
                if($student->save() && $profileImage->move($destinationPath, $name)){
                    return redirect('Student/'.$student->id.'/Summary');
                }
            }
        }
    }


    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
