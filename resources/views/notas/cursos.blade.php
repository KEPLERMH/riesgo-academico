@extends('layouts/app')
@section('titulo', 'Lista Notas')
@section('content')
@if (Auth::user()->tipo == 1)
<style>
    .subitem-anio {
        color: #fff !important;
        background: rgb(0, 116, 184) !important;
        padding: 10px 20px !important;
        font-weight: bold !important;
    }

    .subitem-anio:hover {
        color: #fff !important;
        background: rgb(0, 34, 54) !important;
    }
</style>
<div class="col-lg-12">
    <h3 class="text-center">LISTA DE NOTAS POR CADA DOCENTE</h3>

    <table class="table table-bordered table-responsive table-hover" id="example" width="100%">
        <thead class="bg-primary">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    CURSO
                </th>
                <th>
                    GRADO DE ESTUDIO
                </th>
                <th>
                    CARRERA
                </th>
                <th>
                    DOCENTE
                </th>
                <th>
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($sql as $i)
            <tr>
                <td>{{ $i->id_curso }}</td>
                <td>{{ $i->nombre }}</td>
                <td>{{ $i->grado }}</td>
                <td>{{ $i->section }}</td>
                <td>{{ $i->name . ' ' . $i->apellido }}</td>

                <td>
                    {{-- <a href="{{ route('notas.verNotas', [$i->id_curso, $i->id_grado] ) }}"
                    class="btn btn-success btn-sm">
                    <i class="fas fa-eye"></i>
                    </a> --}}
                    <div class="btn-group" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <a type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-eye"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($anio as $item)
                                <li class="lista-anio">
                                    <a class="subitem-anio"
                                        href="{{ route('notas.verNotas', [$i->id_curso, $i->id_grado,$item->año] ) }}">{{$item->año}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection