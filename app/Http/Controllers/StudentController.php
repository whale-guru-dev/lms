<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\BillingAccount;
use App\Models\Parents;
use App\Models\ParentStudent;
use App\Models\Relationship;
use App\Models\Sibling;
use App\Models\Center;
use Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index()
    {
        $user = Auth::user();
        $center = $user->center->first();
    	return redirect('/Student/'.$center->center_name);
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

    public function std_on_center($centername)
    {
        $center = Center::where('center_name',$centername)->first();
        $students = Student::where('center_id', $center->id)->get();
        return view('pages.student.listing',['students' => $students,'center_id'=>$center->id]);
    }

    public function newstudent($id, Request $request)
    {
        if($request){

            $student = new Student;
            $student->student_nickname = $request['nickname'];
            $student->student_full_name = $request['fullName'];
            $student->student_profile_pic = 'mdefault.png';
            $student->center_id = $id;

            if($request['ba_type'] != 2){
                $billingaccount = new BillingAccount;
                $billingaccount->first_name = $request['fName'];
                $billingaccount->last_name = $request['lName'];
                $billingaccount->email = $request['email'];
                $billingaccount->mobile = $request['mobile'];
                $billingaccount->save();

                if($request['ba_type'] == 3){
                    $parent = new Parents;
                    $parent->fName = $request['fName'];
                    $parent->lName = $request['lName'];
                    $parent->mobile = $request['mobile'];
                    $parent->email = $request['email'];
                    $parent->billingaccount_id = $billingaccount->id;
                    $parent->save();
                }

                $student->student_billing_account_id = $billingaccount->id;
            }elseif($request['ba_type'] == 2){
                $student->student_billing_account_id = $request['ba_id'];
            }

            $student->save();
            return redirect('/Student');
        }
    }

    public function editstudent($id, Request $request)
    {
        if($request){
            $student = Student::find($id);
            $student->student_nickname = $request['nickname'];
            $student->student_full_name = $request['fullName'];

            $student->student_gender = $request['gender'];
            $student->student_dob = $request['dob'];
            $student->student_enrolled_since = $request['enrolled_since'];
            $student->student_school = $request['school'];
            $student->student_contract = isset($request['contract'])?$request['contract']:null;
            // $student->student_billing_account_id = $request['billingaccount'];
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

    public function addparent($id, Request $request)
    {
        if($request){
            if(is_array($request['parentid']))
                for($i = 0 ; $i < sizeof($request['parentid']) ; $i++){
                    $relationship = new Relationship;
                    $relationship->student_id = $id;
                    $relationship->classification = 0;
                    $relationship->relation_id = $request['parentid'][$i];
                    $relationship->save();
                }
            else {
                $relationship = new Relationship;
                    $relationship->student_id = $id;
                    $relationship->classification = 0;
                    $relationship->relation_id = $request['parentid'];
                    $relationship->save();
            }

            return redirect('Student/'.$id.'/Summary');
            
        }
    }

    public function addsibling($id, Request $request)
    {
        if($request){
            if(is_array($request['siblingid']))
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
            else {
                $sibling = new Sibling;
                $sibling->student_id = $id;
                $sibling->self_student_id = $request['siblingid'];
                if(Student::find($request['siblingid'])->student_gender == 0)
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
