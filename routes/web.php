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
    //return view('welcome');
    //By KKH
    //return 'Hello Laravel';
    //By NNH
    return 'Hello Nyo';
    return 'Hello Khine & Khin';
});

Route::get('/testing',function ($value=''){
	return 'This is a texting page';
});
