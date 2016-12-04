@extends('main')
@section('title', '| Sukurti modulį')
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
                <thead>
                <th>Dėstytojas</th>
                <th>Sunaudota valandų</th>
                <th>Sunaudota: T</th>
                <th>Sunaudota: P</th>
                <th>Sunaudota: L</th>
                </thead>
                <td>
                    @foreach($sunaudota_val as $val)
                        <p>{{ $val->teacher->name . " " . $val->teacher->surname }}</p>
                    @endforeach
                </td>
                <td>
                    @foreach($sunaudota_val as $val)
                        <p>{{ $val->valandos }}</p>
                    @endforeach
                </td>
                <td>
                    @foreach($sunaudota_val as $val)
                        <p>{{ $val->T }}</p>
                    @endforeach
                </td>
                <td>
                    @foreach($sunaudota_val as $val)
                        <p>{{ $val->P }}</p>
                    @endforeach
                </td>
                <td>
                    @foreach($sunaudota_val as $val)
                        <p>{{ $val->L }}</p>
                    @endforeach
                </td>
                <thead>
                <th>Viso:</th>
                <th>Viso sunaudota valandų</th>
                <th>Viso sunaudota: T</th>
                <th>Viso sunaudota: P</th>
                <th>Viso sunaudota: L</th>
                </thead>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>

                <thead>
                <th>Likutis:</th>
                <th>Likutis viso</th>
                <th>Likutis: T</th>
                <th>Likutis: P</th>
                <th>Likutis: L</th>
                </thead>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

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
                        {{ Form::hidden('kruvis_id', $kruvis->id) }}
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
                        {{ Form::number('savarankiskas', $kruvis->savarankiskas, ['class' => 'form-control']) }}
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
