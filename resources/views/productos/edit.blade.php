@extends('layouts.plantilla')

@section('title','Productos')

@section('content')
    <h1>Bienvenido a la edicion  de produtos</h1>

    <form action="{{route('productos.update',$producto)}}" method="POST">
        
        @csrf 
        @method('put')
        <label>
            Codigo
            <br>
            <input type="text" name="codigo"  value="{{old('codigo',$producto->codigo)}}">
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
            <input type="text" name="descripcion" value="{{old('descripcion',$producto->descripcion)}}">
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
            <textarea name="detalle" rows="5">{{old('detalle',$producto->detalle)}}</textarea>
        </label>
        @error('detalle')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            <br>
            Precio
            <input type="text" name="precio" value="{{old('precio',$producto->precio)}}">
        </label>
        @error('precio')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            <br>
            Slug
            <input type="text" name="slug" value="{{old('slug',$producto->slug)}}">
        </label>
        @error('slug')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <button class="submit">Actualizar Formulario</button>
        <button class="button" onclick="{{route('productos.index')}}">Volver</button>
    </form>

@endsection
