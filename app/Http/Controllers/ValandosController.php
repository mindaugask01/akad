<?php

namespace App\Http\Controllers;

use App\Kruvis;
use App\Module;
use App\Teacher;
use App\Valanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

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
        $valandos->kruvis_id = $request->kruvis_id;
        $valandos->valandos     = $request->valandos;
        $valandos->T     = $request->T;
        $valandos->P     = $request->P;
        $valandos->L     = $request->L;
        $valandos->savarankiskas     = $request->savarankiskas;
        $valandos->save();
        
        //$valandos->teacher()->sync($request->teachers, false);

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
        $modules = Module::all();
        $teachers = Teacher::all();
        //$vala = Valanda::where('module_id', $kruvis->module_id)->get();
        $sunaudota_val = Valanda::where('module_id', $kruvis->module_id)->get();
        $sunaudota = 0;
        $tsunaudota = 0;
        $psunaudota = 0;
        $lsunaudota = 0;
        foreach ($sunaudota_val as $val) {
            $sunaudota += $val->valandos;
            $tsunaudota += $val->T;
            $psunaudota += $val->P;
            $lsunaudota += $val->L;
        }

        $likutis = $kruvis->viso_val - $sunaudota;
        $likutist = $kruvis->teor - $tsunaudota;
        $likutisp = $kruvis->prat - $psunaudota;
        $likutisl = $kruvis->lab - $lsunaudota;
        

        return view('valandos.create')
            ->withKruvis($kruvis)
            ->withTeachers($teachers)
            ->withModules($modules)
            ->withSunaudota_val($sunaudota_val)
            ->withSunaudota($sunaudota)
            ->withTsunaudota($tsunaudota)
            ->withPsunaudota($psunaudota)
            ->withLsunaudota($lsunaudota)
            ->withLikutis($likutis)
            ->withLikutist($likutist)
            ->withLikutisp($likutisp)
            ->withLikutisl($likutisl)
            ;
    }
}
