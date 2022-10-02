<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request)
    {
        // if(isset($user))
        // echo'Success';
        // else
        // echo'Failed';
        // $student = new Student();
        // echo $target = User::where('is_student',1)->get();
        // echo $student->student_name =$target->name;
        // echo $student->student_email =$target->email;
        // echo $student->student_password =$target->password ;

        // $student->save();

        //return redirect()->route('main');

    }
}
