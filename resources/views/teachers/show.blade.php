@extends('main')

@section('title', '| Registracija')

@section('content')
    @include('partials._nav-back')
    <div class="row">
        <div class="col-md-8">

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
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th>{{ $teacher->id }}</th>
                    <td>{{ $teacher->ped_name }}</td>
                    <td>{{ $teacher->degree }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->surname }}</td>
                    {{--<td>{{ $teacher->user->email }}</td>--}}
                    <td>{{ $teacher->pap_email }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td><a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-default btn-sm">Peržiūrėti</a> <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-default btn-sm">Redaguoti</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>



@stop
