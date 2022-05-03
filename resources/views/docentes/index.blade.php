@extends('layouts.app')

@section('titulo', 'Docentes')

@section('contenido')
<br>

<center><h1>Nuestros Docentes</h1></center>
    <br>
    <div class="row">
    @foreach ($docente as $alias )
        <div class="col-sm">
            <br>
            <div class="card text-center" style="width: 18rem; margin-top:20px">
                <img style="height:150px; width:250px; margin:15px" src="{{Storage::url($alias->foto) }}" class="card-img-top mx-auto d-block" alt="ERROR">
                <div class="card-body">
                    <h5 class="card-title">{{$alias->titulo}}</h5>
                    <a href="/docentes/{{$alias->id}}" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
