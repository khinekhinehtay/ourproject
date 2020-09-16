<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Subject;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        return view('backend.lessons.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //$lessons = Lesson::all();
        $subjects = Subject::all();
        return view('backend.lessons.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required',
            'description' => 'required',
            'subject_id' => 'required'
        ]);

        $videoName = time().'.'.$request->video->extension();

        $request->video->move(public_path('backend/lessonvideo'),$videoName);

        $path = 'backend/lessonvideo/'.$videoName;

        // Data insert
        $lesson = new Lesson;
        $lesson->video = $path;
        $lesson->description = $request->description;
        $lesson->subject_id = $request->subject_id;

        $lesson->save();
        return redirect()->route('lessons.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lessons = Lesson::find($id);
        // $subjects = Subject::find($id);
        return view('backend.lessons.lessondetail',compact('lessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $lesson = Lesson::find($id);
        $subjects = Subject::all();
        return view('backend.lessons.edit',compact('lesson','subjects'));
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
            'video' => 'required|sometimes',
            'description' => 'required',
            'subject_id' => 'required'
        ]);

        if($request->hasFile('video')){
        $videoName = time().'.'.$request->video->extension();

        $request->video->move(public_path('backend/lessonvideo'),$videoName);

        $path = 'backend/lessonvideo/'.$videoName;
        }else{

            $path=$request->oldvideo;
        }

        // Data insert
        $lesson = Lesson::find($id);
        $lesson->video = $path;
        $lesson->description = $request->description;
        $lesson->subject_id = $request->subject_id;

        $lesson->save();
        return redirect()->route('lessons.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        //dd($course);
        $lesson->delete();
        return redirect()->route('lessons.index');
    }
}
