@extends('layouts.app')

@section('titulo','listado de cursos')
@section('contenido')

    <center><h3>Detalles del curso</h3></center>
    <br>
    <center><img style="height:150px; width:250px; margin:15px" src="{{Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="ERROR"></center>
    <br>
    <h3><p class="card-text text-center">{{$cursito->descripcion}}</p></h3>
    <br>
    <center><a href="/laravel/{{$cursito->id}}/edit" class="btn btn-primary">Editar</a></center>
    <br>

    <form class="form-group" action="/laravel/{{$cursito->id}}" method="POST">
        @csrf
        @method('DELETE')
        <center><button type="submit" class="btn btn-danger">Eliminar</button></center>
    </form>
@endsection
