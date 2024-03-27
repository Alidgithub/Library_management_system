<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addClass;
use Illuminate\Support\Facades\Validator;

class AddClassController extends Controller
{
    public function class(){
        $data = addClass::all();
        return view('addClass', compact('data'));
    }

    public function addClass(Request $request){
        // dd($request->all());
        $validate = validator::make($request->all(), [
            "name" => "required|string|regex:/^[^0-9]+$/",
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }

        addClass::insert([
            "class_name" => $request->name,
            "class_number" => $request->class_no,
        ]);
        return redirect()->route('class');
    }
}
