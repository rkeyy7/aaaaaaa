@extends('layouts.plantilla')

@section('title','contactanos ')

@section('content')

<h1>mensaje</h1>
<form action="{{route('contactanos.store')}}" method="POST">

    @csrf

    <label for="">
        name:
        <br>
        <input class="border-2 rounded-lg" type="text" name="nombre" required>
    </label>

    <br>

    <label for="">
        email:
        <br>
        <input class="border-2 rounded-lg" type="text" name="correo" required>
    </label>

    <br>

    <label for="">
        mensaje:
        <br>
        <textarea class="border-2 rounded-lg"  name="mensaje" rows="4"></textarea>
    </label>

    <br>

    <button class="border-2 border-solid rounded-lg" type="submit">enviar mensaje</button>

</form>
@endsection

