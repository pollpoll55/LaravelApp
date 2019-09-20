<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;
use DB;

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

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect('/contact')->with('success', 'Message Received Successfully');
    }
}
