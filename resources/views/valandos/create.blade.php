@extends('main')

@section('title', '| Sukurti modulį')

@section('stylesheets')
    {!! Html::style('css/select2.min.css') !!}
@section('content')
    @include('partials._nav-back')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <table class="table">
                <thead>
                    <th>Modulis</th>
                    <th>Viso valandų</th>
                    <th>Viso: T</th>
                    <th>Viso: P</th>
                    <th>Viso: L</th>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $kruvis->module->name }}</td>
                        <td>{{ $kruvis-> viso_val}}</td>
                        <td>{{ $kruvis-> teor}}</td>
                        <td>{{ $kruvis-> prat}}</td>
                        <td>{{ $kruvis-> lab}}</td>
                    </tr>
                </tbody>

            </table>

            {!! Form::open(['route' => 'valandos.store']) !!}
            <table class="table-condensed" id="form-virsus">
                <thead>
                <tr>
                    <th>Dėstytojas</th>
                    <th>Viso valandų</th>
                    <th>T</th>
                    <th>P</th>
                    <th>L</th>
                    <th>Savarankiškas</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>
                        {{ Form::hidden('module_id', $kruvis->module->id) }}
                        <select class="form-control" name="teacher_id">
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name . " " . $teacher->surname }}</option>
                            @endforeach
                        </select>
                    </td>


                    <td>
                        {{ Form::number('valandos', $kruvis->viso_val, ['class' => 'form-control']) }}
                    </td>

                    <td>
                        {{ Form::number('T', $kruvis->teor, ['class' => 'form-control']) }}
                    </td>

                    <td>
                        {{ Form::number('P', $kruvis->prat, ['class' => 'form-control']) }}
                    </td>

                    <td>
                        {{ Form::number('L', $kruvis->lab, ['class' => 'form-control']) }}
                    </td>

                    <td>
                        {{ Form::number('L', $kruvis->savarankiskas, ['class' => 'form-control']) }}
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
@section('scripts')


@stop
