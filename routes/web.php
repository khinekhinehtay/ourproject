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

// Route::get('/', function () {

//     return view('welcome');

// });

Route::get('/', [
    'uses' => 'WelcomeController@index',
    'as' => 'welcome'
]);


//backend
Route::middleware('role:Admin')->group(function(){
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('courses','CourseController');

Route::resource('subjects','SubjectController');

Route::resource('tutors','TutorController');

Route::resource('lessons','LessonController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/coursedetail','CoursedetailController@index')->name('coursedetail');

Route::get('/course/{course}', 'CoursedetailController@show')->name('course.show');