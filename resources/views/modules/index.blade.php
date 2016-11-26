@extends('main')

@section('title', '| Visi darbuotojai')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('modules.create') }}" class="btn btn-success">Sukurti naują</a>

            <table class="table" id="form-virsus">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Pavadinimas</th>
                    <th>Kodas</th>
                    <th>Studijų forma</th>
                    <th>Kreditai</th>
                    <th>T</th>
                    <th>L</th>
                    <th>P</th>
                    <th>Sav. d.</th>
                    <th>Pakopa</th>
                    <th>Semestras</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($modules as $module)
                    <tr>
                        <th>{{ $module->id }}</th>
                        <td>{{ $module->name }}</td>
                        <td>{{ $module->code }}</td>
                        <td>{{ $module->studiju_forma }}</td>
                        <td>{{ $module->kreditai }}</td>
                        <td>{{ $module->T }}</td>
                        <td>{{ $module->L }}</td>
                        <td>{{ $module->P }}</td>
                        <td>{{ $module->savarankiskas }}</td>
                        <td>{{ $module->pakopa }}</td>
                        <td>{{ $module->semestras }}</td>
                        <td><a href="{{ route('modules.edit', $module->id) }}" class="btn btn-success btn-sm">Redaguoti</a> <a href="{{ route('modules.delete', $module->id) }}" class="btn btn-danger btn-sm">Ištrinti</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



@stop
