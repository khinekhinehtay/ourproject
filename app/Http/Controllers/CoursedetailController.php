<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Auth;
use App\User;

class CoursedetailController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.coursedetail');
    }

     
        public function show($id)
    {
        $courses = Course::find($id);
        return view('frontend.coursedetail',compact('courses'));
    }   
    
}
