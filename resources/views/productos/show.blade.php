@extends('layouts.plantilla')

@section('title','Productos')

@section('content')
    <h1>Bienvenido al show de producto</h1>
    <a href="{{route('productos.index')}}">Volver a Productos</a>
    <br>    
    <a href="{{route('productos.edit', $producto)}}">Editar Producto</a>    
    <p><strong>Codigo:</strong></p>
    <p>{{$producto->codigo}}</p>
    <p><strong>Descripcion:</strong></p>
    <p>{{$producto->descripcion}}</p>
    <p><strong>Detalle:</strong></p>
    <p>{{$producto->detalle}}</p>
    <p><strong>Precio:</strong></p>
    <p>{{$producto->precio}}</p>
    <p><strong>Slug:</strong></p>
    <p>{{$producto->slug}}</p>


    <form action="{{route('productos.destroy',$producto)}}" method="POST">

        @method('delete')
        @csrf

        <button type="submit">Eliminar</button>
    </form>

@endsection
