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


//Adminbackend
Route::middleware('role:Admin')->group(function(){
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('courses','CourseController');

Route::resource('subjects','SubjectController');

Route::resource('tutors','TutorController');

Route::resource('lessons','LessonController');

});

Route::get('/course/{course}/enroll', 'CoursedetailController@enroll')->name('course.enroll');

Route::get('/course/{course}/unenroll', 'CoursedetailController@unenroll')->name('course.unenroll');

Route::get('/course/{course}/complete', 'CoursedetailController@complete')->name('course.complete');

Route::get('/enrollnoti', 'EnrollmentController@dashboard')->name('enrollnoti')->middleware('auth');

Route::get('/enrollnoti/{user}/{course}/approve', 'EnrollmentController@approve')->name('enrollnoti.approve');

Route::get('/enrollnoti/{user}/{course}/disapprove', 'EnrollmentController@disapprove')->name('enrollnoti.disapprove');


//studentbackend
Route::middleware('role:Student')->group(function(){
    Route::get('/overview','OverviewController@dashboardfun')->name('overview');
    
    Route::get('/usernoti','UsernotiController@index')->name('usernoti');

    Route::get('/mycourse','MyCourseController@index')->name('mycourse');

    Route::get('/showsubjects/{courseid}','ShowsubjectController@index')->name('showsubjects.index');

    Route::get('/showlessons/{subjectid}','ShowlessonController@index')->name('showlessons');
});

Route::get('studentdashboard','StudentbackendController@index')->name('studentdashboard');

Route::get('/studentdashboard','StudentbackendController@index')->name('studentdashboard');



Route::get('/coursedetail','CoursedetailController@index')->name('coursedetail');

Route::get('/course/{course}', 'CoursedetailController@show')->name('course.show');

Route::get('/content', 'ContentController@index')->name('content');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dash','CheckAuthController@index')->name('dash');

