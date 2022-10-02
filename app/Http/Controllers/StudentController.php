<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store()
    {
          $student = new Student();
          $target = DB::table('users')->latest()->first();
          $student->student_name =$target->name;
          $student->student_email =$target->email;
          $student->student_password =$target->password ;

          $student->save();

        return redirect()->route('main');

    }
}
