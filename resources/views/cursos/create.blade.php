@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podrás crear un curso</h1>
    
    <form action="{{route('cursos.store')}}" method="POST">

        {{-- la directiva @csrf genera un token de seguridad--}}
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>   
        @enderror


        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        <br>

        @error('categoria')
            <small>*{{$message}}</small>
            <br>   
        @enderror

        <br> 
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

