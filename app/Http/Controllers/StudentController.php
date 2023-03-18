<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){

       $students =  Student::with('registered_courses')->with('registered_courses.course')->get();

       return view('student.index')->with('students',$students);
       //dd($students->toArray());


    }

     public function index1(){
       $hour = 4;
       $students =  Student::with('registered_courses')
       ->with(['registered_courses.course' => function($query) use($hour){
            $query->where('credit','>=',$hour);
       }])
       ->get();
       dd($students->toArray());
       //return view('student.index')->with('students',$students);
       //dd($students->toArray());


    }
}
