@extends('layouts.app')

@section('titulo','listado de cursos')

@section('contenido')
<br>

<center><h4>Aqui encuentra el listado de cursos</h4></center>
    <br>
    {{--Con foreach se recorre el array o la lista--}}
    <div class="row">
    @foreach ($cursito as $alias )
        <div class="col-sm">
            <br>
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$alias->nombre}}</h5>
                    <p class="card-text">{{$alias->descripcion}}</p>
                    <a href="#" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection
