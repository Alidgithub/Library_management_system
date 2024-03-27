<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $matchingStudents = Student::where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('email', 'like', '%' . $searchTerm . '%')->get();

        return response()->json($matchingStudents);
    }


    // public function index(Request $request)
    // {
    //     // Retrieve search results from the URL parameters
    //     $name = $request->input('name');
    //     $email = $request->input('email');

    //     return view('student.studentInfo', compact('name', 'email'));
    // }
}
