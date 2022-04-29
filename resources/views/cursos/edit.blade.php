
@extends('layouts.app')

@section('titulo','Crear curso')
@section('contenido')

        <div class="text-center"><h4>Modifique el curso</h4></div>
        <form action="/laravel/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
            {{--Sirven para actualizar la informacion que se envie--}}
            @method('PUT')
            {{--csrf es una proteccion contra ataques--}}
            @csrf
            <div class="form-group">
            <label for="nombre">Modifique un nuevo curso</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value={{$cursito->nombre}}>
            </div>
            <div class="form-group">
                <label for="descrip">Ingrese una nueva descripcion</label>
                <input type="text" name="descripcion" id="descrip" class="form-control" value="{{$cursito->descripcion}}">
            </div>
            <div class="form-group">
                <label for="image">Ingrese una imagen</label>
                <br>
                <input type="file" name="imagen" id="imagen">
            </div>
            <div class="text-center"><button class="btn btn-primary" type="submit">Actualizar</button></div>
        </form>
@endsection



