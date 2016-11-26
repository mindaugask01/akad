@extends('main')

@section('title', '| Trynimas')

@section('content')
    @include('partials._nav-back')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Ar tikrai norite ištrinti grupę?</h1>
            <p>
                <strong>Pavadinimas: </strong>{{ $grupe->name }} <br>
                <strong>Studentų skaičius: </strong>{{ $grupe->studentu_sk }} <br>
                <strong>Programa: </strong>{{ $grupe->programa->pavadinimas }} <br>


            </p>

            <a href="{{ route('grupes.index') }}" class="btn btn-success btn-block">Atšaukti</a>


            {{ Form::open(['route' => ['grupes.destroy', $grupe->id], 'method' => 'DELETE']) }}
            {{ Form::submit('Ištrinti', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 20px;']) }}

            {{ Form::close() }}
        </div>



    </div>




@stop
