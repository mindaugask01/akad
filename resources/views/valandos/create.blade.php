@extends('main')

@section('title', '| Sukurti modulį')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'valandos.store']) !!}
            <table class="table-condensed" id="form-virsus">
                <thead>
                <tr>
                    <th>Modulis</th>
                    <th>Dėstytojas</th>
                    <th>Viso valandų</th>
                    <th>Skiriamas valandų skaičius</th>
                    <th></th>

                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>
                        {{ $kruvis->module->name }}
                        {{ Form::hidden('module_id', $kruvis->module->id) }}
                    </td>

                    <td>
                        <select class="form-control" name="teacher_id">
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name . " " . $teacher->surname }}</option>
                            @endforeach
                        </select>
                    </td>

                    <td>{{ $kruvis->viso_val }}</td>

                    <td>
                        {{ Form::number('valandos', $kruvis->viso_val, ['class' => 'form-control']) }}

                    </td>
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
