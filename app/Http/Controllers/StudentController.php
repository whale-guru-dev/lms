<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\BillingAccount;
use App\Models\Parents;
use App\Models\ParentStudent;
use App\Models\Relationship;
use App\Models\Sibling;

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

    public function newparent($id, Request $request)
    {
        
        if($request){
            $parent = new Parents;
            $relationship = new Relationship;

            $parent->parent_type = $request['parent_type'];
            $parent->fName = $request['fName'];
            $parent->lName = $request['lName'];
            $parent->mobile = $request['mobile'];
            $parent->address = $request['addr'];
            $parent->email = $request['email'];
            $parent->save();

            $relationship->student_id = $id;
            $relationship->classification = 0;
            $relationship->relation_id = $parent->id;
            $relationship->save();

            return redirect('Student/'.$id.'/Summary');
        }
    }

    public function addsibling($id, Request $request)
    {
        if($request){

            for($i = 0 ; $i < sizeof($request['siblingid']) ; $i++){
                $sibling = new Sibling;
                $sibling->student_id = $id;
                $sibling->self_student_id = $request['siblingid'][$i];
                if(Student::find($request['siblingid'][$i])->student_gender == 0)
                    $sibling->sibling_type = 0;
                else
                    $sibling->sibling_type = 1;
                $sibling->save();
            }

            return redirect('Student/'.$id.'/Summary');
            
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
