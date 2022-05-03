@extends('layouts.app')

@section('titulo','listado de Docentes')
@section('contenido')

    <center><h3>Detalles del curso</h3></center>
    <br>
    <center><img style="height:150px; width:250px; margin:15px" src="{{Storage::url($docente->foto) }}" class="card-img-top mx-auto d-block" alt="ERROR"></center>
    <br>
    <h3><p class="card-text text-center">{{$docente->nombre}}</p></h3>
    <h3><p class="card-text text-center">{{$docente->edad}} Años</p></h3>
    <br>
    <center><a href="/docentes/{{$docente->id}}/edit" class="btn btn-primary">Editar</a></center>
@endsection
