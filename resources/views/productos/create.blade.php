@extends('layouts.plantilla')

@section('title','Productos')

@section('content')
    <h1>Bienvenido al create de prodcutos</h1>

    <form action="{{route('productos.store')}}" method="POST">
        
        @csrf 

        <label>
            Codigo
            <br>
            <input type="text" name="codigo" value="{{old('codigo')}}">
        </label>
        @error('codigo')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion
            <br>
            <input type="text" name="descripcion" value="{{old('descripcion')}}">
        </label>
        @error('descripcion')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Detalle
            <br>
            <textarea name="detalle" rows="5">{{old('detalle')}}</textarea>
        </label>
        @error('detalle')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <label>
            <br>
            Precio
            <input type="text" name="precio" value="{{old('precio')}}">
        </label>
        <br>
        @error('precio')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            <br>
            Slug
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>
        @error('slug')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        

        <button class="submit">Enviar Formulario</button>

    </form>
@endsection
