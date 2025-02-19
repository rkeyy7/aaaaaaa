@extends('layouts.plantilla')

@section('title', 'contactanos ')

@section('content')

    <h1>INFORMACION DE CONTACTO</h1>
    <form action="{{ route('contactanos.store') }}" method="POST">

        @csrf

        <label for="">
            name:
            <br>
            <input class="border-2 rounded-lg" type="text" name="name" value="{{ old('name') }}">
        </label>

        @error('name')
        <br>

        <span><strong> {{ $message }}  </strong></span>
        @enderror


        <br>

        <label for="">
            correo:
            <br>
            <input class="border-2 rounded-lg" type="text" name="correo" required value="{{ old('correo') }}">
        </label>


        @error('correo')
        <br>

        <span><strong> {{ $message }}  </strong></span>
        @enderror



        <br>

        <label for="">
            mensaje:
            <br>
            <textarea class="border-2 rounded-lg" name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
        </label>

        @error('mensaje')
        <br>
        <span><strong> {{ $message }}  </strong></span>

        @enderror

        <br>

        <button class="border-2 border-solid rounded-lg" type="submit">enviar mensaje</button>

    </form>

    @if (session('info'))

    <script>
        alert('{{ session('info')}}');
    </script>

    @endif
@endsection

