<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;
use App\Grupe;
use Illuminate\Support\Facades\Session;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programos = new Programa();
        $programos = Programa::all();
        //$grupes = $programos->grupe;
        return view('programos.index')->withProgramos($programos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = new Programa;
        $programa->pavadinimas            = $request->pavadinimas;
        $programa->sritis     = $request->sritis;
        $programa->kryptis     = $request->kryptis;
        $programa->pakopa     = $request->pakopa;
        $programa->fakultetas = $request->fakultetas;

        //išsaugoti DB
        $programa->save();

        Session::flash('success', 'Išsaugota');
        return redirect()->route('programos.index');
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
        $programa = Programa::find($id);
        return view('programos.edit')->withPrograma($programa);
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
        $programa = Programa::find($id);
        $programa->pavadinimas       = $request->pavadinimas;
        $programa->sritis      = $request->sritis;
        $programa->kryptis = $request->kryptis;
        $programa->pakopa = $request->pakopa;
        $programa->fakultetas = $request->fakultetas;

        //išsaugoti DB
        $programa->save();

        Session::flash('success', 'Išsaugota');
        return redirect()->route('programos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) 
    {
        $programa = Programa::find($id);
        return view('programos.delete')->withPrograma($programa);
    }
    
    
    public function destroy($id)
    {
        $programa = Programa::find($id);
        $programa->delete();
        Session::flash('success', 'Programa buvo sėkmingai ištrinta');
        return redirect()->route('programos.index');
    }
}
