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
        $student = new Student();
        $target = User::where('is_student',1)->first();

        // print_r($target);

        $student->student_name =$target->name;
        $student->student_email =$target->email;
        $student->student_password =$target->password ;

        $student->save();

        return redirect()->route('main');

    }
}
