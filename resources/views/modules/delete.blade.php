@extends('main')

@section('title', '| Trynimas')

@section('content')
    @include('partials._nav-back')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Ar tikrai norite ištrinti dalyką?</h1>
            <p>
                <strong>Pavadinimas: </strong>{{ $module->name }} <br>
                <strong>Kodas </strong>{{ $module->code }} <br>
                <strong>Studijų forma </strong>{{ $module->studiju_forma }} <br>
                <strong>Kreditai: </strong>{{ $module->kreditai }} <br>

            </p>

            <a href="{{ route('programos.index') }}" class="btn btn-success btn-block">Atšaukti</a>


            {{ Form::open(['route' => ['modules.destroy', $module->id], 'method' => 'DELETE']) }}
            {{ Form::submit('Ištrinti', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 20px;']) }}

            {{ Form::close() }}
        </div>



    </div>




@stop
