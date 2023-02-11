@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta pagina podrás editar un curso</h1>
    
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        {{-- la directiva @csrf genera un token de seguridad--}}
        @csrf

        {{-- la directiva method es para especificar que se usará el PUT --}}
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        <br>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror


        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror


        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        <br>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection

