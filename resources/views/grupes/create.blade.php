@extends('main')

@section('title', '| Sukurti grupę')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            {!! Form::open(['route' => 'grupes.store']) !!}
            <table class="table-condensed" id="form-virsus">
                <thead>
                <tr>
                    <th>Grupės pavadinimas</th>
                    <th>Studentų<br> skaičius</th>
                    <th>Studijų programa</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>{{ Form::text('name') }}</td>
                    <td id="forma">{{ Form::number('studentu_sk') }}</td>

                    <td>
                    <select class="form-control" name="programa_id">
                        @foreach($programos as $programa)
                            <option value="{{ $programa->id }}">{{ $programa->pavadinimas }}</option>
                        @endforeach
                    </select>
                    </td>
                    <td></td>
                </tr>

                </tbody>
            </table>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    {{ Form::submit('Išsaugoti', ['class' => 'btn btn-success center btn-block', 'style' => 'margin-top:50px;']) }}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>



@stop
