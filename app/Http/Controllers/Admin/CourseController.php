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
            'name'=> ['required', 'string', 'max:255'],
            'instructor_id'=>'required',
            'lecture'=>'required|integer',
            'duration'=>'required',
            'level'=>'required',
            'language'=>'required',
            'price'=>'required|integer',
            'description'=>'required',
            'image' =>'image|required',
            'active' => 'required',
        ]);
        $image= $request->file('image')->store('public/img/courses-img');

        Course::create([
            'course_name' =>strip_tags($request->name),
            'instructor_id' =>strip_tags($request->instructor_id),
            'course_description' =>strip_tags($request->description),
            'course_price' =>strip_tags($request->price),
            'course_img' =>strip_tags($image),
            'course_lectures' =>strip_tags($request->lecture),
            'course_duration' =>strip_tags($request->duration),
            'course_level' =>strip_tags($request->level),
            'course_language' =>strip_tags($request->language),
            'is_active' => strip_tags($request->active),
            'category_id' =>strip_tags($request->category_id),
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
            !is_null($data->course_img) && Storage::delete($data->course_img);
            $image= $request->file('image')->store('public/img/courses-img');
        }

        $data->update([
            'course_name' =>strip_tags($request->name),
            'instructor_id' =>strip_tags($request->instructor_id),
            'course_description' =>strip_tags($request->description),
            'course_price' =>strip_tags($request->price),
            'course_img' =>strip_tags($image),
            'course_lectures' =>strip_tags($request->lecture),
            'course_duration' =>strip_tags($request->duration),
            'course_level' =>strip_tags($request->level),
            'course_language' =>strip_tags($request->language),
            'is_active' => strip_tags($request->active),
            'category_id' =>strip_tags($request->category_id),
        ]);
        return redirect()->Route('admin.courses.show',$id);
    }

    public function destroy($id){
        $delete=Course::findOrFail($id);
        $deleteImage=$delete->course_img;
        $delete->delete();
        !is_null($deleteImage) && Storage::delete($deleteImage);
        return redirect()->Route('admin.courses.index');
    }
}
