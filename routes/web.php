<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// use App\Course;
// Route::get('/course',function(){
//     $courses = Course::all();

//     foreach($courses as $course){
//         echo $course->course_name ."<br/>";
//     }


// });

Route::resource('course','CourseController');
Route::resource('student','StudentController');
Route::resource('faculty','FacultyController');
Route::resource('makanan','MakananController');