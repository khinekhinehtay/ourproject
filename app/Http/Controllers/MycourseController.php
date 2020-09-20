<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\UserCourse;
use App\Enrollments;
use App\User;
use Auth;

class MycourseController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $usercourse = UserCourse::where('user_id', '=', Auth::id())
                                    ->get();
            $courses = [];
            foreach ($usercourse as $row) {
                $courses[] = $row->course;
            }
            $courses = collect($courses);
        } else {
            $courses = Course::all();
        }
        if ($courses->isEmpty()) {
            \Session::flash('course', 'Not enrolled to any courses');
        } else {
            foreach ($courses as $course) {
                $course->author = User::find($course->user_id);
            }
        }
       
        return view('studentbackend.mycourse', compact('courses'));
    }
}
