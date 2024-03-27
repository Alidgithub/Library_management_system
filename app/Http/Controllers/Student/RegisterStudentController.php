<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\addClass;
use Illuminate\Support\Facades\Validator;

class RegisterStudentController extends Controller
{
    public function registerStudent(){
        $clases = addClass::select('cid', 'class_name')->get();
        return view('student.registerStudent', compact('clases'));
    }

    public function store(Request $request){
        // dd($request->all());

        $validate = validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'reg_no' => 'required|string',
            'class_id' => 'required', // assuming 'classes' is the table name for classes
            'address' => 'required|string',
            'aadhaar' => 'required|string|',
            'pic' => 'required|nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        $file = $request->file('pic');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);


        $students = new Student();

        $students->name = $request->name;
        $students->email = $request->email;
        $students->phone = $request->phone;
        $students->reg_no = $request->reg_no;
        $students->class_id = $request->class_id;
        $students->address = $request->address;
        $students->aadhaar = $request->aadhaar;
        $students->profile_pic = $filename;

        $students->save();

        return redirect()->route('studentInfo')->with('success', 'Student Registration Done...');
    }



}
