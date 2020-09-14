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
<<<<<<< HEAD
	//By KHSM
=======

>>>>>>> fe7cb23aeb5bf791b289d0396c42877df85176e9
    return view('welcome');

});


//backend
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');