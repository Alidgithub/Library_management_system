<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\addClass;

class StudentController extends Controller
{
    public function studentInfo(){
        // $students = Student::select('id', 'name', 'email', 'phone', 'profile_pic', 'class_id')->get();
        
        $students = Student::join('add_classes', 'students.class_id', '=', 'add_classes.cid')
        ->select('students.id', 'students.name', 'students.email', 'students.phone', 'students.profile_pic', 'students.class_id', 'add_classes.class_name')
        ->get();

        return view('student.studentInfo', compact('students'));
    }

    public function searchItem(){
        
    }
}
