<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Auth;
use App\User;
use App\UserCourse;
use App\Enrollments;
use App\Tutor;


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

     
        public function show(Course $course)
    {
        // $courses = Course::find($course);
        if (Auth::check()) {
            $user = Auth::user();
            $text = UserCourse::where('user_id' , '=', $user->id)->where('course_id', '=', $course->id)->get()->first();
            $enroll = (isset($text))?$text->course_enrolled:'';
            $comp = UserCourse::where('user_id', '=', $user->id)->where('course_id', '=', $course->id)->get()->first();
            $complete = (isset($comp) && $comp->course_completed == 1)?$comp->course_completed:false;
        } else {
            $enroll = false;
            $complete = false;
        }
        $author = Tutor::find($course->name);
        return view('frontend.coursedetail', compact('course', 'author','enroll', 'complete'));

        // $courses = Course::find($id);
        // return view('frontend.coursedetail',compact('courses'));
    } 
    public function enroll(Course $course)
    {
        if (Auth::guest()) {
            return redirect(route('login'));
        }
        //add enroll request to admin dashboard
        $enrollment = Enrollments::create([
            'user_id' => Auth::id(),
            'course_id' => $course->id,
            'status' => 0,
        ]);
        $enrollment->save();
        \Session::flash('flash_messagetouser', 'Your request has been submitted, You will be able to see the course content after admin approves your request!');
        return redirect(route('dash'));
    }

    public function unenroll(Course $course)
    {
        //detach record from user-course.
        UserCourse::where('user_id', '=', Auth::id())
                    ->where('course_id', '=', $course->id)
                    ->delete();
        \Session::flash('flash_messagetouser', 'You have been unenrolled from the course!');
        return redirect(route('welcome'));
    }

    public function complete(Course $course)
    {
        UserCourse::where('user_id', '=', Auth::id())
                    ->where('course_id', '=', $course->id)
                    ->update(['course_completed' => 1]);
        \Session::flash('flash_message', 'Course marked as completed!');
        return redirect(route('course.show', [$course->id]));
    }  
    
}
