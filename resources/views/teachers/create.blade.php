@extends('main')

@section('title', '| Dėstytojo sukūrimas')

@section('content')
    @include('partials._nav-back')
    <div class="row">



        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                {!! Form::open(['route' => 'teachers.store', 'method' => 'POST']) !!}


                {{ Form::label('name', 'Vardas:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}

                {{ Form::label('surname', 'Pavardė:') }}
                {{ Form::text('surname', null, ['class' => 'form-control']) }}

                {{ Form::select('ped_name', ['profesorius' => 'profesorius', 'docentas' => 'docentas', 'lektorius' => 'lektorius', 'asistentas' => 'asistentas'], null, ['class' => 'form-control', 'id' => 'form-virsus']) }}

                {{ Form::select('degree', ['habil. dr.' => 'habil. dr.', 'dr.' => 'dr.', 'neturi' => 'neturi', ], null, ['class' => 'form-control', 'id' => 'form-virsus']) }}

                <select class="form-control" name="email">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->email }}</option>
                    @endforeach
                </select>

                {{ Form::label('pap_email', 'Papildomas paštas:') }}
                {{ Form::text('pap_email', null, ['class' => 'form-control']) }}

                {{ Form::label('phone', 'Telefonas:') }}
                {{ Form::text('phone', null, ['class' => 'form-control']) }}

                {{ Form::label('birthday', 'Gimimo diena:') }}
                {{ Form::date('birthday', null, ['class' => 'form-control']) }}

                {{ Form::label('atestuotas_iki', 'Atestuotas iki:') }}
                {{ Form::date('atestuotas_iki', null, ['class' => 'form-control']) }}

                <input type="hidden" name="user_id" value="{{ $user->id }}">

                {{ Form::submit('Išsaugoti', ['class' => 'btn btn-success btn-block', 'id' => 'form-virsus']) }}

                {!! Form::close() !!}

            </div>
        </div>


</div>
@stop
