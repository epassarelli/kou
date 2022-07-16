@extends('layouts.plantilla')

@section('title','Productos')

@section('content')
    <h1>Bienvenido al index de productos</h1>
    <a href="{{route('productos.create')}}">Crear Producto </a>
    <table border="1">
        <tr>
           <th>Codigo</th>     
           <th>Nombre</th>     
           <th>Precio</th>
           <th>Slug</th>
        </tr>    
        @foreach($productos as $key => $producto)
            <tr>
                <td><a href="{{route('productos.show',$producto)}}">{{$producto->codigo}}</a></td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->slug}}</td>
            </tr>    
        @endforeach
    </table>    
    {{$productos->links() }}
@endsection
