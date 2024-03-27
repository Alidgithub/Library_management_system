<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\books;
use Illuminate\Http\Request;
use App\Models\bysale;
use App\Models\Student;
use Carbon\Carbon;

class BookAssignController extends Controller
{
    public function bookAssign(){
        return view('student.bookAssign');
    }

    public function bookAssignToStudent(Request $request){
        // dd($request->all());
        $book = books::select('qty')->where('id', $request->book_id)->first();
        $assignCount = bysale::where('book_id', $request->book_id)->count();
        if($assignCount >= $book->qty) {
            return redirect()->back()->with('error', 'This Book is not avalabale');
        }
        $student = Student::where('reg_no', $request->reg_no)->first();
        $student_id = $student->id;

        $currentDate = Carbon::now();
        $newDate = $currentDate->addDays(15);
        $formattedDate = $newDate->format('Y-m-d');

        $bookAssignToStudent = new bysale();
        // dd($request->all());
        $bookAssignToStudent->st_id = $student_id;
        $bookAssignToStudent->book_id = $request->book_id;
        $bookAssignToStudent->submit_date = $request->submit_date ?? $formattedDate;
        $bookAssignToStudent->qty = $request->qty;

        $bookAssignToStudent->save();

        return redirect()->back()->with('bookAssignToStudent', 'Book Assigned Successfully');




    }
}
