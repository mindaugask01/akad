@extends('main')

@section('title', '| Visi darbuotojai')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('teachers.create') }}" class="btn btn-success">Sukurti naują dėstytoją</a>

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Vardas</th>
                    <th>E-paštas</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('teachers.edit', $user->id) }}" class="btn btn-default btn-sm">Redaguoti</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



@stop
