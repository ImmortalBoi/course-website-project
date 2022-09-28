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
        $image= $request->file('image')->store('public/instructors');

        Instructor::create([
            'instructor_name' =>$request->name,
            'instructor_email' =>$request->email,
            'instructor_img' =>$image,
        ]);

        return to_route('admin.instructors.index');
    }

    public function show($id)
    {
        // return view('admin.instructors.show')->with('instructor',Instructor::findOrFail($id));
    }

    public function edit($id)
    {
        return view('admin.instructors.edit')->with('instructor',Instructor::findOrFail($id));
    }


    public function update(Request $request, $id)
    {
        $request ->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'image' =>'image',
        ]);
        $data= Instructor::findOrFail($id);
        $image = $data->instructor_img;

        if($request->hasFile('image')) {
            Storage::delete($data->course_img);
            $image= $request->file('image')->store('public/img/courses-img');
        }
        $data->update([
            'instructor_name' =>$request->name,
            'instructor_email' =>$request->email,
            'instructor_img' =>$image,
        ]);
        return redirect()->Route('admin.instructors.index');
    }

    public function destroy($id)
    {

        $delete=Instructor::findOrFail($id);
        $deleted = DB::table('courses')->where('instructor_id', '=', $id)->delete();
        $deleteImage =$delete->instructor_img;
        $delete->delete();
        Storage::delete($deleteImage);
        return redirect()->Route('admin.instructors.index');
    }
}
