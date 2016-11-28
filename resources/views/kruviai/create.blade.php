@extends('main')

@section('title', '| Sukurti modulį')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <h3>Modulio priskyrimas grupei</h3>
            {!! Form::open(['route' => 'kruvis.store']) !!}
            <table class="table-condensed" id="form-virsus">
                <thead>
                <tr>
                    <th>Modulis</th>
                    <th>Grupė</th>
                    <th></th>

                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>
                    <select class="form-control" name="module_id">
                        @foreach($modules as $module)
                            <option value="{{ $module->id }}">{{ $module->code . " | " . $module->name }}</option>
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

                </tr>

                </tbody>
            </table>

            </div>
        </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{ Form::submit('Išsaugoti', ['class' => 'btn btn-success center btn-block', 'style' => 'margin-top:50px;']) }}
        </div>
    </div>
@stop
