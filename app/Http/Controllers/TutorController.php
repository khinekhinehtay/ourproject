<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;
class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::all();
        return view('backend.tutors.index',compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.tutors.create');
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
            'name' => 'required',
            'photo' => 'required',
            'address' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'dob' => 'required',
        ]);

        $photoName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/tutorimg'),$photoName);

        $path = 'backend/tutorimg/'.$photoName;

        // Data insert

        $tutor = new Tutor;
        $tutor->name = $request->name;
        $tutor->photo = $path;
        $tutor->address = $request->address;
        $tutor->email = $request->email;
        $tutor->gender = $request->gender;
        $tutor->dob = $request->dob;
        $tutor->save();
        return redirect()->route('tutors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutors = Tutor::find($id);
        return view('backend.tutors.tutordetail',compact('tutors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
         $tutor = Tutor::find($id);
         return view('backend.tutors.edit',compact('tutor'));
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
            'address' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'dob' => 'required',
        ]);

         if($request->hasFile('photo')){
            $photoName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/tutorimg'),$photoName);

            $path = 'backend/tutorimg/'.$photoName;
        }else{

            $path=$request->oldphoto;
        }

        // Data insert
        $tutor = Tutor::find($id);
        $tutor->name = $request->name;
        $tutor->photo = $path;
        $tutor->address = $request->address;
        $tutor->email = $request->email;
        $tutor->gender = $request->gender;
        $tutor->dob = $request->dob;
        $tutor->save();
        return redirect()->route('tutors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Tutor::find($id);
        //dd($tutor);
        $tutor->delete();
        return redirect()->route('tutors.index');
    }
}
