<?php

namespace App\Http\Controllers;

use App\Kruvis;
use App\Teacher;
use App\Valanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ValandosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valandos = new Valanda;
        $valandos->teacher_id = $request->teacher_id;
        $valandos->module_id     = $request->module_id;
        $valandos->valandos     = $request->valandos;
        $valandos->save();

        Session::flash('success', 'Išsaugota');
        return redirect()->route('kruvis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function naujas($id) 
    {
        $kruvis = Kruvis::find($id);
        $teachers = Teacher::all();
        return view('valandos.create')->withKruvis($kruvis)->withTeachers($teachers);
    }
}
