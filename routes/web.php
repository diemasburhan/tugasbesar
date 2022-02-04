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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('course','CourseController');
Route::resource('student','StudentController');
Route::resource('faculty','FacultyController');
Route::resource('makanan','MakananController');
Route::resource('menu','MenuController');
Route::resource('modal','ModalController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
