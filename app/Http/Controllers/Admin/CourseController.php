<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseStoreRequest;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        // $instructors= Instructore::all(); //need to make MVC for it
        return view('admin.courses.index',compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(CourseStoreRequest $request)
    {
        $image= $request->file('image')->store('public/img/courses-img');

        Course::create([
            'course_name' =>$request->name,
            'instructor_id' =>$request->instructor_id,
            'course_description' =>$request->description,
            'course_price' =>$request->price,
            'course_img' =>$image,
        ]);

        return to_route('admin.courses.index');
    }


    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
