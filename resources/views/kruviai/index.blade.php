@extends('main')

@section('title', '| Visi darbuotojai')

@section('content')
    @include('partials._nav-back')



        <div class="row">
        <div class="col-md-12">

            <a href="{{ route('kruvis.create') }}" class="btn btn-success">Sukurti naują įrašą</a>
            <table class="table" id="form-virsus">
                <thead>
                <tr>
                    <th>Sando kodas</th>
                    <th>Studijų forma</th>
                    <th>Sando pav.</th>
                    <th>Kreditai</th>
                    <th>T</th>
                    <th>L</th>
                    <th>P</th>
                    <th>Sav. d.</th>
                    <th>Fakultetas</th>
                    <th>Prog. kodas</th>
                    <th>Grupė</th>
                    <th>Pakopa</th>
                    <th>Semestras</th>
                    <th>Stud. sk.</th>
                    <th>Teor. srautų sk.</th>
                    <th>Val</th>
                    <th>Gr. sk.</th>
                    <th>Val</th>
                    <th>Pogr. sk.</th>
                    <th>Val</th>
                    <th>Koef</th>
                    <th>Sav. darbo</th>
                    <th>Iš viso val</th>
                    <th>Dėst.</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>

                @foreach($kruviai as $kruvis)
                    <tr>
                        <td>{{ $kruvis->module->code }}</td>
                        <td>{{ $kruvis->module->studiju_forma }}</td>
                        <td>{{ $kruvis->module->name }}</td>
                        <td>{{ $kruvis->module->kreditai }}</td>
                        <td>{{ $T = $kruvis->module->T }}</td>
                        <td>{{ $L = $kruvis->module->L }}</td>
                        <td>{{ $P = $kruvis->module->P }}</td>
                        <td>{{ $kruvis->module->savarankiskas }}</td>
                        <td>{{ $kruvis->module->programa->fakultetas }}</td>
                        <td>{{ $kruvis->module->programa->pavadinimas }}</td>
                        <td>{{ $kruvis->grupe->name }}</td>
                        <td>{{ $kruvis->module->pakopa }}</td>
                        <td>{{ $kruvis->module->semestras }}</td>
                        <td>{{ $kruvis->grupe->studentu_sk }}</td>
                        <td>{{ $srautai_T = $kruvis->grupe->studentu_sk > 30 ? 2 : 1 }}</td>
                        <td>{{ $teorija = $kruvis->module->T * $srautai_T }}</td>
                        <td>{{ $grupes_P = $kruvis->grupe->studentu_sk > 12 ? 2 : 1 }}</td>
                        <td>{{ $pratybos = $kruvis->module->P * $grupes_P }}</td>
                        <td>{{ $grupes_L = $kruvis->grupe->studentu_sk > 12 ? 2 : 1 }}</td>
                        <td>{{ $laboratoriniai = $kruvis->module->P * $grupes_L }}</td>
                        <td>{{ $koef = (0.48 * $kruvis->module->savarankiskas)/20 }}</td>
                        <td>{{ $savarankiskas = $koef * $kruvis->grupe->studentu_sk }}</td>
                        <td>{{ $viso = $savarankiskas + $teorija + $pratybos + $laboratoriniai }}</td>
                        <td>{{ $kruvis->teacher->name . " " . $kruvis->teacher->surname}}</td>
                        <td><a href="" class="btn btn-success btn-sm">Redaguoti</a> <a href="" class="btn btn-danger btn-sm">Trinti</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@stop
