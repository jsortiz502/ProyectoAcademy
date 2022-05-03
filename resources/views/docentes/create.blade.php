@extends('layouts.app')

@section('titulo','Crear Docente')
@section('contenido')

        <div class="text-center"><h4>Creacion del nuevo Docente</h4></div>
        <form action="/docentes" method="POST" enctype="multipart/form-data">
            {{--csrf es una proteccion contra ataques--}}
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Docente</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="titulo">Titulo del Docente</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad"min="10" max="100">
            <div class="form-group">
                <label for="foto">Ingrese una foto</label>
                <br>
                <input type="file" name="foto" id="foto">
            </div>
            <div class="text-center"><button class="btn btn-primary" type="submit">Crear</button></div>
        </form>
@endsection
