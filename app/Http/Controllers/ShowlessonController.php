<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\UserCourse;
use App\Enrollments;
use App\User;
use Auth;
use App\Lesson;

class ShowlessonController extends Controller
{
    public function index($subjectid){
        $lessons = Lesson::where('subject_id',$subjectid)->get();
       
        return view('studentbackend.showlesson', compact('lessons'));
    }
}
