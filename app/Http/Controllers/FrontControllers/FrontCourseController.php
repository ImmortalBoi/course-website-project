<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontCourseController extends Controller
{
    public function index(){
        return view('course')->with('courses',Course::all());
    }

    public function show($id){
        $course =Course::findOrFail($id);
        $instructor =Instructor::findOrFail($course->instructor_id);
        return view('detail')->with('course',$course)->with('Targetinstructor',$instructor)->with('categories',Category::all());
    }
}
