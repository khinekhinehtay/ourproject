<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Tutor;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('backend.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tutors = Tutor::all();
        return view('backend.courses.create',compact('tutors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'photo' => 'required',
            'description' => 'required',
            'tutor_id' => 'required',
        ]);

        $photoName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/courseimg'),$photoName);

        $path = 'backend/courseimg/'.$photoName;

        // Data insert

        $course = new Course;
        $course->name = $request->name;
        $course->photo = $path;
        $course->description = $request->description;
        $course->tutor_id = $request->tutor_id;

        $course->save();
        return redirect()->route('courses.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

        $courses = Course::find($id);
        return view('backend.courses.coursedetail',compact('courses'));
    }                                                                                   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $course = Course::find($id);
        $tutors = Tutor::all();
        return view('backend.courses.edit',compact('course','tutors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|sometimes',
            'description' => 'required',
            'tutor_id' => 'required',
        ]);

        if($request->hasFile('photo')){
            $photoName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/courseimg'),$photoName);

            $path = 'backend/courseimg/'.$photoName;
        }else{

            $path=$request->oldphoto;
        }
        
        // Data insert
        $course = Course::find($id);
        $course->name = $request->name;
        $course->photo = $path;
        $course->description = $request->description;
        $course->tutor_id = $request->tutor_id;

        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $course = Course::find($id);
        //dd($course);
        $course->delete();
        return redirect()->route('courses.index');
    }
}
