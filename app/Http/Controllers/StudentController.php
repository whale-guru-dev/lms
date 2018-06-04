<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

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
    	return view('pages.student.summary',['student' => $student]);
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
}
