@extends('main')

@section('title', '| Visi darbuotojai')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('programos.create') }}" class="btn btn-success">Sukurti naują</a>
            <p>{{ $programos }}</p>
            <table class="table" id="form-virsus">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Pavadinimas</th>
                    <th>Sritis</th>
                    <th>Kryptis</th>
                    <th>Pakopa</th>
                    <th>Fakultetas</th>
                    <th>Grupės</th>
                    <th>Moduliai</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($programos as $programa)
                    <tr>
                        <th>{{ $programa->id }}</th>
                        <td>{{ $programa->pavadinimas }}</td>
                        <td>{{ $programa->sritis }}</td>
                        <td>{{ $programa->kryptis }}</td>
                        <td>{{ $programa->pakopa }}</td>
                        <td>{{ $programa->fakultetas }}</td>
                        <td>
                            @foreach($programa->grupe as $grupe)
                                <span class="label label-default">{{ $grupe->name }}</span>
                                @endforeach
                        </td>

                        <td>
                            @foreach($programa->module as $module)
                                <p>{{ $module->name }}</p>
                            @endforeach
                        </td>

                        <td><a href="{{ route('programos.edit', $programa->id) }}" class="btn btn-success btn-sm">Redaguoti</a> <a href="{{ route('programos.delete', $programa->id) }}" class="btn btn-danger btn-sm">Ištrinti</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



@stop
