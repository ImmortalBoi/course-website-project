<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'email|required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('main');
    }

    public function show (){
        
        $data= Contact::all();
        return view('admin.contact.index',compact('data'));
    }

    public function messages()
    {

    }


    public function destroy(Contact $contact)
    {
        //
    }
}
