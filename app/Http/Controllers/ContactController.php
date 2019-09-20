<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        
    }
    public function contact(){
        return view('pages.contact');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all);

        return redirect('/contact')->with('success', 'Message Received Successfully');
    }
}
