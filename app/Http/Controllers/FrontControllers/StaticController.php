<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    public function index(){
        return view('index');
    }
}
