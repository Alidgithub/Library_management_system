<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addClass;
use Illuminate\Support\Facades\Validator;
use App\Models\books;

class AddBooksController extends Controller
{
    public function books(){
        $clases = addClass::all();
        return view('addBooks', compact('clases'));
    }

    public function storBooks(Request $request){
        // dd($request->all());

        $validate = Validator::make($request->all(),[
            'book_name' => 'required|string',
            'author_name' => 'required|string',
            'qty' => 'required|numeric',
            'class' => 'required|string',

        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        }
        
        $data = new books();

        $data->name = $request->book_name;
        $data->author = $request->author_name;
        $data->qty = $request->qty;
        $data->class_id = $request->class;

        $data->save();

        return redirect()->back()->with('addBook', 'Book Added Successfully...');
    }
}
