@extends('main')

@section('title', '| Visi darbuotojai')

@section('content')
@include('partials._nav-back')


<div class="row">
    <div class="col-md-12">

        <a href="{{ route('teachers.create') }}" class="btn btn-success">Sukurti naują</a>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Pareigos</th>
                <th>Laipsnis</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>E. paštas</th>
                <th>Pap. paštas</th>
                <th>Telefonas</th>
                <th>Gimimo data</th>
                <th>Atestuotas iki</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <th>{{ $teacher->user->id }}</th>
                    <td>{{ $teacher->ped_name }}</td>
                    <td>{{ $teacher->degree }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->surname }}</td>
                    <td>{{ $teacher->user->email }}</td>
                    <td>{{ $teacher->pap_email }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td>{{ $teacher->birthday }}</td>
                    <td>{{ $teacher->atestuotas_iki }}</td>
                    <td><a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-default btn-sm">Redaguoti</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>



@stop
