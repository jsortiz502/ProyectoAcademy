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
    <br>
    {{--Para este caso no se necesita escribir destroy en la ruta como si escribimos edit en la ruta para obtener
        el formulario de edicion. Aqui creamos un formulario simplemente para poder incluir
        el boton de eliminar--}}
    <form class="form-group" action="/docentes/{{$docente->id}}" method="POST">
        @csrf
        @method('DELETE')
        <center><button type="submit" class="btn btn-danger">Eliminar</button></center>
    </form>
@endsection
