<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Tutor;

class WelcomeController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $courses = Course::all();
       $tutors = Tutor::all();
        // return view('welcome')->with('courseposts',$courses);
       return view('welcome',compact('courses','tutors'));
    }

     
}
