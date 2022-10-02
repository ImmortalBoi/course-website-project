<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\darkModeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\FrontControllers\StaticController;
use App\Http\Controllers\FrontControllers\FrontCourseController;

Route::get('/', [StaticController::class,'index'] )->name('main');

Route::get('/darkModeToggle', function () {
    darkModeController::switchMode();
    return back();
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('/contact', ContactController::class);
Route::get('/contact/messages', [ContactController::class,'messages'])->name('messages');


Route::get('/course', [FrontCourseController::class, 'index'])->name('course.index');
Route::get('/course/{id}', [FrontCourseController::class, 'show'])->name('course.show');


Route::get('/team', function () {
    return view('team');
});

Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::get('/profile/edit/{id}',[ProfileController::class,'edit'])->name('editProflie');
Route::put('/profile/update/{id}',[ProfileController::class,'update'])->name('updateProfile');

Route::get('/profile/edit', function () {
    return view('student.edit');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','admin'])->name('dashboard');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){

    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/courses', CourseController::class);
    Route::resource('/instructors', InstructorController::class);
    Route::resource('/categories', CategoryController::class);
});

Route::get('student',[StudentController::class,'store'])->name('st-store');

require __DIR__.'/auth.php';
