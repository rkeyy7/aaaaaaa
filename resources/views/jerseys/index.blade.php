@extends('layouts.plantilla')

@section('title','jerseys')

@section('content')

<h1>bienvenido a la pagina de rkjerseys</h1>
<a href="{{route('jerseys.create')}}">crear jersey</a>
<ul>
    @foreach ($jerseys as $jersey)
        <li>
           <a href="{{route('jerseys.show',$jersey->id)}}"> {{$jersey->name}}</a>
        </li>

    @endforeach
    {{$jerseys->links();}}

</ul>

@endsection

