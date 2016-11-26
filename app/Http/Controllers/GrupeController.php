<?php

namespace App\Http\Controllers;

use App\Grupe;
use App\Programa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GrupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupes = new Grupe();
        $grupes = Grupe::all();
        return view('grupes.index')->withGrupes($grupes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programos = Programa::all();
        return view('grupes.create')->withProgramos($programos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //$programa = Programa::find();
        $grupe = new Grupe;
        $grupe->name       = $request->name;
        $grupe->studentu_sk      = $request->studentu_sk;
        $grupe->programa_id = $request->programa_id;

        //išsaugoti DB
        $grupe->save();

        Session::flash('success', 'Išsaugota');
        return redirect()->route('grupes.index');
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
        $grupe = Grupe::find($id);
        $programos = Programa::all();
        return view('grupes.edit')->with('grupe', $grupe)->withProgramos($programos);
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
        $grupe = Grupe::find($id);
        $grupe->name       = $request->name;
        $grupe->studentu_sk      = $request->studentu_sk;
        $grupe->programa_id = $request->programa_id;
        
        //išsaugoti DB
        $grupe->save();

        Session::flash('success', 'Išsaugota');
        return redirect()->route('grupes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function delete($id) 
    {
        $grupe = Grupe::find($id);
        return view('grupes.delete')->withGrupe($grupe);
    }
    
    public function destroy($id)
    {
        $grupe = Grupe::find($id);
        $grupe->delete();
        Session::flash('success', 'Grupė buvo sėkmingai ištrinta');
        return redirect()->route('grupes.index');
    }
}
