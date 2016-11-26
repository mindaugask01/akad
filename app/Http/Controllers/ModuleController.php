<?php

namespace App\Http\Controllers;

use App\Grupe;
use App\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = new Module();
        $modules = Module::all();
        return view('modules.index')->withModules($modules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'code'      => 'required|unique:modules,code',
        );
        $validator = Validator::make(Input::all(), $rules);
                $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('modules/create')
                ->withInput(Input::except('password'));
        } else {
            //saugojimas
            //gauti iš request
            $module = new Module;
            $module->name       = $request->name;
            $module->code      = $request->code;
            $module->studiju_forma = $request->studiju_forma;
            $module->kreditai = $request->kreditai;
            $module->T = $request->T;
            $module->L = $request->L;
            $module->P = $request->P;
            $module->savarankiskas = $request->savarankiskas;
            $module->pakopa = $request->pakopa;
            $module->semestras = $request->semestras;

            //išsaugoti DB
            $module->save();

            Session::flash('success', 'Išsaugota');
            return redirect()->route('modules.index');
        }


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
        $module = Module::find($id);

        return view('modules.edit')->with('module',$module);
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

            //saugojimas
            //gauti iš request
            $module = Module::find($id);
            $module->name            = Input::get('name');
            $module->code            = Input::get('code');
            $module->studiju_forma   = Input::get('studiju_forma');
            $module->kreditai        = Input::get('kreditai');
            $module->T               = Input::get('T');
            $module->L               = Input::get('L');
            $module->P               = Input::get('P');
            $module->savarankiskas   = Input::get('savarankiskas');
            $module->pakopa          = Input::get('pakopa');
            $module->semestras       = Input::get('semestras');
            

            //išsaugoti DB
            $module->save();

            Session::flash('success', 'Išsaugota');
            return redirect()->route('modules.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $module = Module::find($id);
        return view('modules.delete')->withModule($module);
    }

    public function destroy($id)
    {
        $module = Module::find($id);
        $module->delete();
        Session::flash('success', 'Dalykas buvo sėkmingai ištrinta');
        return redirect()->route('modules.index');
    }
}
