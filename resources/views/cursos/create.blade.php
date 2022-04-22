{{--En blade heredamos con @extends--}}


@extends('layouts.app')

@section('titulo','Crear curso')
@section('contenido')

        <div class="text-center"><h4>Creacion del nuevo curso</h4></div>
        <form action="/laravel" method="POST">
            {{--csrf es una proteccion contra ataques--}}
            @csrf
            <div class="form-group">
            <label for="nombre">Nombre del curso</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="descrip">Ingrese una descripcion</label>
                <input type="text" name="descripcion" id="descrip" class="form-control">
            </div>
            <div class="text-center"><button class="btn btn-primary" type="submit">Crear</button></div>
        </form>
@endsection

{{-- Esto es antes de heredar la plantilla
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario para crear</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
       <div class="text-center"><h4>Creacion del nuevo curso</h4></div>
        <form action="POST">
            <div class="form-group">
              <label for="nombre">Nombre del curso</label>
              <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="descrip">Ingrese una descripcion</label>
                <input type="text" name="descripcion" id="descrip" class="form-control">
              </div>
              <div class="text-center"><button class="btn btn-primary" type="submit">Crear</button></div>
        </form>
    </div>
</body>
</html>
--}}
