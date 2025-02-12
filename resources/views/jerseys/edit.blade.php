@extends('layouts.plantilla')

@section('title', 'jerseys')

@section('content')
    <h1 class="ml-5 mt-5">aqui podras actulizar jerseys</h1>


    <form action="{{ route('jerseys.update', $jersey) }}" method="POST">
        @csrf
        @method('put')
        <label class=" ml-5">
            Nombre:
            <br>
            <input class="border ml-5" type="text" name="name" value="{{ old('name', $jersey->name) }}">
        </label>
        @error('name')
            <br>
            <span> {{ $message }} </span>
            </br>
        @enderror
        <br>

        <label class=" ml-5">
            description:
            <br>

            <textarea class="border ml-5" name="description" rows="5">{{ $jersey->description }}</textarea>
        </label>
        @error('description')
            <br>
            <span> {{ $message }} </span>
            </br>
        @enderror
        <br>

        <label class=" ml-5">
            Categoria:
            <br>
            <input class="border ml-5" type="text" name="categoria" value="{{ old('Categoria',$jersey->categoria) }}">
        </label>
        @error('categoria')
            <br>
            <span> {{ $message }} </span>
            </br>
        @enderror
        <br>

        <button class="mt-5 ml-5 border rounded" type="submit"> actulizar info del jersey </button>
    </form>

@endsection
