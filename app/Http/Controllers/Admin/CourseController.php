<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CourseStoreRequest;

class CourseController extends Controller
{

    public function index()
    {

        return view('admin.courses.index')->with('courses',Course::all())->with('instructor',Instructor::all());
    }

    public function create()
    {
        return view('admin.courses.create')->with('instructors',Instructor::all())->with('categories',Category::all());
    }

    public function store(CourseStoreRequest $request)
    {
        $request ->validate([
            'name'=> 'required',
            'instructor_id'=>'required',
            'lecture'=>'required|integer',
            'duration'=>'required',
            'level'=>'required',
            'language'=>'required',
            'price'=>'required|integer',
            'description'=>'required',
            'image' =>'image|required',
        ]);
        $image= $request->file('image')->store('public/img/courses-img');

        Course::create([
            'course_name' =>$request->name,
            'instructor_id' =>$request->instructor_id,
            'course_description' =>$request->description,
            'course_price' =>$request->price,
            'course_img' =>$image,
            'course_lectures' =>$request->lecture,
            'course_duration' =>$request->duration,
            'course_level' =>$request->level,
            'course_language' =>$request->language,
        ]);

        return to_route('admin.courses.index');
    }


    public function show($id){
        $target =Course::findOrFail($id);
        $instructor= Instructor::findOrFail($target->instructor_id);
        $category= Category::find($target->category_id);

        return view('admin.courses.show',['course' => $target,'instructor' =>$instructor,'category' =>$category]);
    }

    public function edit($id){
        $target =Course::findOrFail($id);
        $instructorId =$target->instructor_id;
        $categoryId =$target->category_id;
        return view('admin.courses.edit')->with('course',Course::findOrFail($id))->with('instructors',Instructor::all())->with('targetInstructor',Instructor::findOrFail($instructorId))->with('recentCategory',Category::find($categoryId))->with('categories',Category::all());
    }

    public function update(Request $request, $id){
        $request ->validate([
            'name'=> 'required',
            'instructor_id'=>'required',
            'lecture'=>'required|integer',
            'duration'=>'required',
            'level'=>'required',
            'language'=>'required',
            'price'=>'required|integer',
            'description'=>'required',
            'category_id' =>'required',
            'image' =>'image',
        ]);
        $data=Course::findOrFail($id);
        $image=$data->course_img;

        if($request->hasFile('image')) {
            Storage::delete($data->course_img);
            $image= $request->file('image')->store('public/img/courses-img');
        }
        
        $data->update([
            'course_name' =>$request->name,
            'instructor_id' =>$request->instructor_id,
            'course_description' =>$request->description,
            'course_lectures' =>$request->lecture,
            'course_duration' =>$request->duration,
            'course_level' =>$request->level,
            'course_language' =>$request->language,
            'course_price' =>$request->price,
            'course_img' =>$image,
            'category_id' =>$request->category_id,
            'is_active' =>$request->active,
        ]);
        return redirect()->Route('admin.courses.show',$id);
    }

    public function destroy($id){
        $delete=Course::findOrFail($id);
        $deleteImage=$delete->course_img;
        $delete->delete();
        Storage::delete($deleteImage);
        return redirect()->Route('admin.courses.index');
    }
}
