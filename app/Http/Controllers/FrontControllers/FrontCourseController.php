<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontCourseController extends Controller
{
    public function index(){
        $courses = DB::table('courses')->where('is_active', 1)->paginate(15);
        return view('course')->with('courses',$courses);
    }

    public function show($id){
        $course =Course::findOrFail($id);
        $instructor =Instructor::findOrFail($course->instructor_id);
        return view('detail')->with('course',$course)->with('Targetinstructor',$instructor)->with('categories',Category::all());
    }
}
