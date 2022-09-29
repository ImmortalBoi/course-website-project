<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        $categories =Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function create(){}

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        Category::create([
            'category_name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index');
    }

    public function show($id){}

    public function edit($id)
    {
        $relatedCourses = DB::select('select course_name , id from courses where category_id ='.$id);
        return view('admin.categories.edit')->with('category',Category::findOrFail($id))->with('courses',$relatedCourses);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $update =Category::findOrFail($id);
        $update->update([
            'category_name' => $request->name,
        ]);
        return to_route('admin.categories.index');
    }

    public function destroy($id)
    {
        $delete =Category::findOrFail($id);
        $delete->delete();
        return redirect()->route('admin.categories.index');
    }
}
