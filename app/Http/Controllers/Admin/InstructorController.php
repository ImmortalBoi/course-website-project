<?php

namespace App\Http\Controllers\Admin;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InstructorController extends Controller
{

    public function index()
    {
        $instructors =Instructor::all();
        return view('admin.instructors.index',compact('instructors'));
    }

    public function create()
    {
        return view('admin.instructors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>['required', 'string', 'max:255'],
            'email' =>['required', 'string', 'email', 'max:255', 'unique:users'],
            'jobTitle' =>'required',
            'phone' =>'required|integer',
            'image' => 'image',
        ]);
        $image= $request->file('image')->store('public/instructors');

        Instructor::create([
            'instructor_name' =>strip_tags($request->name),
            'instructor_email' =>strip_tags($request->email),
            'instructor_job_title' =>strip_tags($request->jobTitle),
            'instructor_phone_number' =>strip_tags($request->phone),
            'instructor_img' =>strip_tags($image),
        ]);

        return to_route('admin.instructors.index');
    }

    public function show($id)
    {
        // return view('admin.instructors.show')->with('instructor',Instructor::findOrFail($id));
    }

    public function edit($id)
    {
        $relatedCourses = DB::select('select course_name , id from courses where instructor_id ='.$id);
        return view('admin.instructors.edit')->with('instructor',Instructor::findOrFail($id))->with('courses',$relatedCourses);
    }


    public function update(Request $request, $id)
    {
        $request ->validate([
            'name'=> ['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'jobTitle' =>'required',
            'phone' =>'required',
            'image' =>'image',
        ]);
        $data= Instructor::findOrFail($id);
        $image = $data->instructor_img;

        if($request->hasFile('image')) {
            !is_null($data->instructor_img) && Storage::delete($data->instructor_img);
            $image= strip_tags($request->file('image'))->store('public/instructors');
        }
        $data->update([
            'instructor_name' =>strip_tags($request->name),
            'instructor_email' =>strip_tags($request->email),
            'instructor_job_title' =>strip_tags($request->jobTitle),
            'instructor_phone_number' =>strip_tags($request->phone),
            'instructor_img' =>strip_tags($image),
        ]);
        return redirect()->Route('admin.instructors.index');
    }

    public function destroy($id)
    {

        $delete=Instructor::findOrFail($id);
        $deleted = DB::table('courses')->where('instructor_id', '=', $id)->delete();
        $deleteImage =$delete->instructor_img;
        $delete->delete();
        !is_null($deleteImage) && Storage::delete($deleteImage);
        return redirect()->Route('admin.instructors.index');
    }
}
