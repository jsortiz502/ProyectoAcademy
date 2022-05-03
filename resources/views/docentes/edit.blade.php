@extends('layouts.app')

@section('titulo','Editar Docente')
@section('contenido')

        <div class="text-center"><h4>Modifique la informacion del docente</h4></div>
        <form action="/docentes/{{$docente->id}}" method="POST" enctype="multipart/form-data">
            {{--Sirven para actualizar la informacion que se envie--}}
            @method('PUT')
            {{--csrf es una proteccion contra ataques--}}
            @csrf
            <div class="form-group">
            <label for="nombre">Escriba el nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value={{$docente->nombre}}>
            </div>
            <div class="form-group">
                <label for="titulo">Ingrese un titulo</label>
                <input type="text" name="titulo" id="descrip" class="form-control" value="{{$docente->titulo}}">
            </div>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad"min="10" max="100">
            <div class="form-group">
                <label for="foto">Ingrese una imagen</label>
                <br>
                <input type="file" name="foto" id="foto">
            </div>
            <div class="text-center"><button class="btn btn-primary" type="submit">Actualizar</button></div>
        </form>
@endsection
