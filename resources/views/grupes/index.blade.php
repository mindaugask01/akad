@extends('main')

@section('title', '| Visi darbuotojai')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('grupes.create') }}" class="btn btn-success">Sukurti naują grupę</a>

            <table class="table" id="form-virsus">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Pavadinimas</th>
                    <th>Studentų skaičius</th>
                    <th>Studijų programa</th>
                    <th>Studijų forma</th>
                    {{--<th>Studijų pakopa</th>--}}
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($grupes as $grupe)
                    <tr>
                        <th>{{ $grupe->id }}</th>
                        <td>{{ $grupe->name }}</td>
                        <td>{{ $grupe->studentu_sk }}</td>
                        <td>{{ $grupe->programa->pavadinimas }}</td>
                        <td><a href="{{ route('grupes.edit', $grupe->id) }}" class="btn btn-success btn-sm">Redaguoti</a> <a href="{{ route('grupes.delete', $grupe->id) }}" class="btn btn-danger btn-sm">Trinti</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



@stop
