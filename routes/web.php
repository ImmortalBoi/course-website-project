<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\InstructorController;


Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/about', function () {
    return view('about');
});

Route::resource('/contact', ContactController::class);
Route::get('/contact/messages', [ContactController::class,'messages'])->name('messages');

Route::get('/course/{id}', function () {
    return view('detail');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','admin'])->name('dashboard');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){

    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/courses', CourseController::class);
    Route::resource('/instructors', InstructorController::class);
});

Route::get('student',[StudentController::class,'store'])->name('st-store');

require __DIR__.'/auth.php';
