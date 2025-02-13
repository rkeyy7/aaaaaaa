@extends('layouts.plantilla')

@section('title', 'jerseys')

@section('content')
    <h1 class="ml-5 mt-5">aqui podras registrar jerseys</h1>


    <form action="{{ route('jerseys.store') }}" method="POST">

        @csrf

        <label class=" ml-5">
            Nombre:
            <br>
            <input class="border ml-5" type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <span> {{ $message }} </span>
            </br>
        @enderror
        <br>

        <label class=" ml-5">
            slug:
            <br>
            <input class="border ml-5" type="text" name="slug" value="{{old('slug')}}">
        </label>

        @error('slug')
            <br>
            <span> {{ $message }} </span>
            </br>
        @enderror
        <br>



        <label class=" ml-5">
            description:
            <br>
            <textarea class="border ml-5" name="description" rows="5">{{old('description')}}</textarea>
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
            <input class="border ml-5" type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <span> {{ $message }} </span>
            </br>
        @enderror
        <br>

        <button class="mt-5 ml-5 border rounded" type="submit"> enviar info del jersey </button>
    </form>

@endsection
