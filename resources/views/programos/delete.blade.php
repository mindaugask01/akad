@extends('main')

@section('title', '| Trynimas')

@section('content')
    @include('partials._nav-back')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Ar tikrai norite ištrinti programą?</h1>
            <p>
                <strong>Pavadinimas: </strong>{{ $programa->pavadinimas }} <br>
                <strong>Sritis </strong>{{ $programa->sritis }} <br>
                <strong>Kryptis </strong>{{ $programa->kryptis }} <br>
                <strong>Pakopa: </strong>{{ $programa->pakopa }} <br>

            </p>

            <a href="{{ route('programos.index') }}" class="btn btn-success btn-block">Atšaukti</a>


            {{ Form::open(['route' => ['programos.destroy', $programa->id], 'method' => 'DELETE']) }}
            {{ Form::submit('Ištrinti', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 20px;']) }}

            {{ Form::close() }}
        </div>



    </div>




@stop
