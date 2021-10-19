<?php

use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\SearchteacherController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeacherinfoController;
use App\Models\FacultyControll;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => []], function () {
    Route::resource('teachers', TeacherController::class);
    Route::resource('students', StudentController::class);
    Route::resource('faculty', FacultyController::class);
    Route::resource('classes', ClassController::class);
    Route::resource('subjects',SubjectController::class);
    Route::resource('searchteachers',SearchteacherController::class);
    Route::resource('teacherinfo', TeacherinfoController::class);
});

