<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\UserCourse;
use App\Enrollments;
use App\User;
use Auth;
use App\Subject;

class ShowsubjectController extends Controller
{
    public function index($courseid){
       
       $sub = Subject::where('course_id',$courseid)->get();
        return view('studentbackend.showsubject', compact('sub'));
    }
}
