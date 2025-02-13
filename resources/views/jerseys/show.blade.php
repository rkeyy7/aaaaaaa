@extends('layouts.plantilla')

@section('title','tu equipo es '. $jersey->name)

@section('content')
<h1> bienvenido a la paginad jerseys, tu equipo es {{$jersey->name}} </h1>
<a href="{{route('jerseys.index')}}">volver a cursos</a>
<br>
<a href="{{route('jerseys.edit', $jersey)}}">editar curso</a>
<p><strong>categoria: </strong>{{$jersey->categoria}}</p>
<p><strong>description: </strong>{{$jersey->description}}</p>


<form action="{{route('jerseys.destroy',$jersey)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>

@endsection

