@extends('main')

@section('title', '| Trynimas')

@section('content')
    @include('partials._nav-back')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Ar tikrai norite ištrinti dėstytoją?</h1>
            <p>
                <strong>Pareigos: </strong>{{ $teacher->ped_name }} <br>
                <strong>Laipsnis: </strong>{{ $teacher->degree }} <br>
                <strong>Vardas: </strong>{{ $teacher->name }} <br>
                <strong>Pavardė: </strong>{{ $teacher->surname }} <br>
                <strong>Paštas:</strong>{{ $teacher->user->email }}
            </p>

                <a href="{{ route('teachers.index') }}" class="btn btn-success btn-block">Atšaukti</a>


            {{ Form::open(['route' => ['teachers.destroy', $teacher->id], 'method' => 'DELETE']) }}
            {{ Form::submit('Ištrinti', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top: 20px;']) }}

            {{ Form::close() }}
        </div>



            </div>




@stop
