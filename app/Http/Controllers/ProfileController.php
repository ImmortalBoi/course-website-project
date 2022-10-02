<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){
        $email = Auth::user()->email;
        $student = DB::table('students')->where('student_email', $email)->get();
        return view('student.index',['student' =>$student]);
    }

    public function edit($id){
        $student =Student::findOrFail($id);
        return view('student.edit',['student' =>$student]);
    }

    public function update(Request $request,$id){
        $request ->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'image' =>'image',

        ]);

        $data= Student::findOrFail($id);
        $image = $data->student_img;

        if($request->hasFile('image')) {
            !is_null($data->student_img) && Storage::delete($data->student_img);
            $image= $request->file('image')->store('public/students-img');
        }

        $affected = DB::table('students')->where('id', $id)
              ->update([
                'student_name' =>$request->name,
                'student_email' => $request->email,
                'student_img' =>$image,
                'student_phone_number' =>$request->phone,
                'student_education' =>$request->education,

              ]);
              DB::table('users')->where('email','=',$data->student_email)
              ->update([
                'name' =>$request->name,
                'email' =>$request->email,
                'phone_number' =>$request->phone,
              ]);

        return redirect()->route('profile');
    }

}
