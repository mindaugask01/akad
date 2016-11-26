@extends('main')
@section('title', '| Pagrindinis')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>ISK adademinė sistema</h1>
                <p class="lead">Prašome prisijungti</p>
                <p>

                </p>
            </div>
        </div>
    </div>
    <!-- end of header .row -->
@include('auth.login')


@stop
