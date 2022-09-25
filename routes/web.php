<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact',[contactController::class,'store']);

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
});

// Route::middleware(['student'])->group(function(){
//     Route::get('/st',[StudentController::class,'index']);
// });

// Route::group(['middleware' => ['student']], function () {
//     Route::get('st', [StudentController::class,'index'] );
// });

// Route::get('/st',[StudentController::class,'index']);

Route::resource('courseControl', CourseController::class);

require __DIR__.'/auth.php';
