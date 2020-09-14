<?php

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

    return view('welcome');

});


//backend
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
Route::resource('courses','CourseController');

Route::resource('subjects','SubjectsController');
=======

Route::resource('tutors','TutorController');
=======
Route::resource('lessons','LessonController');
/*>>>>>>> e857617f78da9b339b1e8d626dd8b56931821ecd
>>>>>>> ae0d5e342d063a045197dff78bd60220ddfc3fb7*/
