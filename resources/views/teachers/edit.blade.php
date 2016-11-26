@extends('main')

@section('title', '| Redagavimas')

@section('content')
    @include('partials._nav-back')
    <div class="row">
    <div class="col-md-2 col-md-offset-5">

        <a href="{{ route('teachers.delete', $teacher->id) }}" class="btn btn-danger btn-block">Ištrinti</a>

    </div>


    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {{ Form::model($teacher, ['route' => ['teachers.update', $teacher->id], 'method' => 'PUT']) }}


            {{ Form::label('name', 'Vardas:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            {{ Form::label('surname', 'Pavardė:') }}
            {{ Form::text('surname', null, ['class' => 'form-control']) }}

            {{ Form::select('ped_name', ['profesorius' => 'profesorius', 'docentas' => 'docentas', 'lektorius' => 'lektorius', 'asistentas' => 'asistentas'], null, ['class' => 'form-control', 'id' => 'form-virsus']) }}

            {{ Form::select('degree', ['habil. dr.' => 'habil. dr.', 'dr.' => 'dr.', 'neturi' => 'neturi', ], null, ['class' => 'form-control', 'id' => 'form-virsus']) }}

            {{ Form::label('email', 'E-paštas:') }}
            {{ Form::text('email', $teacher->user->email, ['class' => 'form-control']) }}

            {{ Form::label('pap_email', 'Papildomas paštas:') }}
            {{ Form::text('pap_email', null, ['class' => 'form-control']) }}

            {{ Form::label('phone', 'Telefonas:') }}
            {{ Form::text('phone', null, ['class' => 'form-control']) }}

            {{ Form::label('birthday', 'Gimimo diena:') }}
            {{ Form::date('birthday', null, ['class' => 'form-control']) }}

            {{ Form::label('atestuotas_iki', 'Atestuotas iki:') }}
            {{ Form::date('atestuotas_iki', null, ['class' => 'form-control']) }}

            {{ Form::submit('Išsaugoti', ['class' => 'btn btn-success btn-block', 'id' => 'form-virsus']) }}

            {!! Form::close() !!}

        </div>
    </div>



@stop
