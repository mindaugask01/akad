@extends('main')

@section('title', '| Sukurti modulį')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-12">
                <p>{{ $modules }}</p>

            {!! Form::open(['route' => 'kruvis.store']) !!}
            <table class="table-condensed" id="form-virsus">
                <thead>
                <tr>
                    <th>Modulis</th>
                    <th>Grupė</th>
                    <th>Dėstytojas</th>
                    <th></th>

                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>
                    <select class="form-control" name="module_id">
                        @foreach($modules as $module)
                            <option value="{{ $module->id }}">{{ $module->name }}</option>
                        @endforeach
                    </select>
                    </td>


                    <td>
                    <select class="form-control" name="grupe_id">
                        @foreach($grupes as $grupe)
                            <option value="{{ $grupe->id }}">{{ $grupe->name }}</option>
                        @endforeach
                    </select>
                    </td>

                    <td>
                        <select class="form-control" name="teacher_id">
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name . " " . $teacher->surname }}</option>
                            @endforeach
                        </select>
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
