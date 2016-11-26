@extends('main')

@section('title', '| Sukurti grupę')

@section('content')
    @include('partials._nav-back')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            {!! Form::open(['route' => 'programos.store']) !!}
            <table class="table-condensed" id="form-virsus">
                <thead>
                <tr>
                    <th>Pavadinimas (kodas)</th>
                    <th>Mokslo sritis</th>
                    <th>Mokslo kryptis</th>
                    <th>Pakopa</th>
                    <th>Fakultetas</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>

                <tr>
                    <td>{{ Form::text('pavadinimas') }}</td>
                    <td id="forma">
                        <select class="form-control" name="sritis">
                            <option value="Technologijos mokslai">Technologijos mokslai</option>
                            <option value="Fiziniai mokslai">Fiziniai mokslai</option>
                        </select>
                    </td>

                    <td>
                        <select class="form-control" name="kryptis">
                            <option value="Informatikos inžinerija">Informatikos inžinerija</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Matematika">Matematika</option>
                        </select>
                    </td>

                    <td>
                        <select class="form-control" name="pakopa">
                            <option value="Bakalauras">Bakalauras</option>
                            <option value="Magistras">Magistras</option>
                            <option value="Daktaras">Daktaras</option>
                        </select>
                    </td>

                    <td>
                        <select class="form-control" name="fakultetas">
                            <option value="JTGMF">JTGMF</option>
                            <option value="SMF">SMF</option>
                            <option value="SvMF">SvMF</option>
                        </select>
                    </td>

                    <td></td>
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
