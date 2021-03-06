@extends('main')

@section('title', '| Sukurti modulį')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-12">

            {{ Form::model($module, ['route' => ['modules.update', $module->id], 'method' => 'PUT']) }}
            <table class="table-condensed" id="form-virsus">
                <thead>
                <tr>
                    <th>Pavadinimas</th>
                    <th>Kodas</th>
                    <th>Studijų</br> forma</th>
                    <th>Kreditai</th>
                    <th>T</th>
                    <th>L</th>
                    <th>P</th>
                    <th>Sav.</br> darbas</th>
                    <th>Pakopa</th>
                    <th>Semestras</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>{{ Form::text('name', $module->name) }}</td>
                    <td>{{ Form::text('code', $module->code) }}</td>
                    <td id="forma">
                        <select name="studiju_forma">
                                <option value="Nuolatinė">Nuolatinė</option>
                                <option value="Ištęstinė">Ištęstinė</option>
                        </select>
                    </td>
                    <td id="forma">{{ Form::number('kreditai', $module->kreditai) }}</td>
                    <td id="forma">{{ Form::number('T', $module->T) }}</td>
                    <td id="forma">{{ Form::number('L', $module->L) }}</td>
                    <td id="forma">{{ Form::number('P', $module->P) }}</td>
                    <td id="forma">{{ Form::number('savarankiskas', $module->savarankiskas) }}</td>
                    <td id="forma">
                        <select name="pakopa">
                            <option value="Bakalauro">Bakalauro</option>
                            <option value="Magistro">Magistro</option>
                            <option value="Daktaro">Daktaro</option>
                        </select>
                    </td>
                    <td id="forma">{{ Form::number('semestras', $module->semestras) }}</td>
                    <td></td>
                </tr>

                </tbody>
            </table>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    {{ Form::submit('Atnaujinti', ['class' => 'btn btn-success center btn-block', 'style' => 'margin-top:50px;']) }}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>



@stop
