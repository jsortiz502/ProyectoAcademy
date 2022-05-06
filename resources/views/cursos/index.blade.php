@extends('layouts.app')

@section('titulo','listado de cursos')

@section('contenido')
<br>

<center><h4>Listado de Cursos</h4></center>
    <br>
    {{--Con foreach se recorre el array o la lista--}}
    <div class="row">
    @foreach ($cursito as $alias )
        <div class="col-sm">
            <br>
            <div class="card text-center" style="width: 18rem; margin-top:20px">
                <img style="height:150px; width:250px; margin:15px" src="{{Storage::url($alias->imagen) }}" class="card-img-top mx-auto d-block" alt="ERROR">
                <div class="card-body">
                    <h5 class="card-title">{{$alias->nombre}}</h5>
                    <a href="/laravel/{{$alias->id}}" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
