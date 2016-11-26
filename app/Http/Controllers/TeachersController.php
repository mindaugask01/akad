<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = new Teacher();
        $teachers = Teacher::all();
        $users = new User;
        $users = User::all();
        return view('teachers.index')->withTeachers($teachers)->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('teachers.create')->withUsers($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher;
        /*$this->validate($request, [

        ]);*/
        //dd($teacher);
        $teacher->ped_name = $request->ped_name;
        $teacher->degree = $request->degree;
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        //$teacher->user->email = $request->email;
        $teacher->pap_email = $request->pap_email;
        $teacher->phone = $request->phone;
        $teacher->birthday = $request->birthday;
        $teacher->user_id = $request->user_id;
        $teacher->atestuotas_iki = $request->atestuotas_iki;

        $teacher->save();

        Session::flash('success', 'Išsaugota');

        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$teacher = new Teacher;
        $teacher = Teacher::find($id);


        return view('teachers.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit')->with('teacher', $teacher);
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

        $teacher = Teacher::find($id);
        /*$this->validate($request, [

        ]);*/
        //dd($teacher);
        $teacher->ped_name = $request->ped_name;
        $teacher->degree = $request->degree;
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->user->email = $request->email;
        $teacher->pap_email = $request->pap_email;
        $teacher->phone = $request->phone;
        $teacher->birthday = $request->birthday;
        $teacher->atestuotas_iki = $request->atestuotas_iki;

        $teacher->save();

        Session::flash('success', 'Išsaugota');

        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.delete')->withTeacher($teachers);
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);



        $teacher->delete();
        Session::flash('success', 'Dėstytojas buvo sėkmingai ištrintas');
        return redirect()->route('teachers.index');
    }
}
