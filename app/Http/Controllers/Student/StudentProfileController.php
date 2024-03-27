<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{

    public function getinfo(Request $request) {
        $reg_no = $request->reg_no;
        $student = Student::where('reg_no', $reg_no)->with('class')->with('class.books')->first();

        return response()->json($student);
        
    }

    public function studentProfile($id){
        $students = Student::find($id);
        return view('student.studentProfile', compact('students'));
    }

    public function updateStudentProfile(Request $request, $id){
        $students = Student::find($id);

        $students->name = $request->name;
        $students->email = $request->email;
        $students->phone = $request->phone;
        $students->aadhaar = $request->aadhaar;
        $students->address = $request->address;
        $students->save();
        return redirect()->back()->with('update_success', 'Student Profile Updated Successfu');
        
    }

    public function deleteStudentProfile(Request $request){
        Student::find($request->student_id)->delete();
        // return redirect()->back()->with('delete', 'Student Deleted Successfully...');
        return response()->json(['status' => 'success', 'massage' => 'Student Deleted Successfully...']);
    }
    
    
}
