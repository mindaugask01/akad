<?php

namespace App\Http\Controllers;

use App\Kruvis;
use Illuminate\Http\Request;
use App\Module;
use App\Teacher;
use App\Grupe;
use App\Programa;
use App\User;
use Illuminate\Support\Facades\Session;

class KruvisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kruviai = new Kruvis();
        $kruviai = Kruvis::all();
        $grupes = Grupe::all();
        $teachers = Teacher::all();
        return view('kruviai.index')->withKruviai($kruviai)->withGrupes($grupes)->withTeachers($teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        $grupes = Grupe::all();
        $teachers = Teacher::all();
        return view('kruviai.create')->withModules($modules)->withGrupes($grupes)->withTeachers($teachers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kruvis = new Kruvis;
        $kruvis->module_id = $request->module_id;
        $kruvis->grupe_id = $request->grupe_id;
        $kruvis->teacher_id = $request->teacher_id;
        //dd($kruvis);
        $kruvis->save();


        Session::flash('success', 'Išsaugota');
        return redirect()->route('kruvis.index');

        //$kruvis->       = $request->name;
        //$grupe->studentu_sk      = $request->studentu_sk;
        //$grupe->programa_id = $request->programa_id;

        //išsaugoti DB
        //



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
        $module = Module::find($id);
        $grupes = Grupe::all();
        return view('kruviai.create')->withModule($module)->withGrupes($grupes);
    }
}
