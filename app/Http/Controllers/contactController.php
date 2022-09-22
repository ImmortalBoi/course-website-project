<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>'required',
            'email'=>'email|required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        contact::create($formFields);
        return redirect('/');
    }
}
