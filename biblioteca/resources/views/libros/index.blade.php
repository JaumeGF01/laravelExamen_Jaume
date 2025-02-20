@extends('plantilla')

@section('titulo', "Listado de libros")

@section("contenido")
<table>
    <tr>
        <td>Titulo</td>
        <td>Autor</td>
        <td>Editorial</td>
        
    </tr>
@forelse ($libros as $libro)
    <tr>
        <td>{{$libro->titulo}}</td>
        <td>{{$libro->autor}}</td>
        <td>{{$libro->editorial}}</td>
    </tr>
@empty
    <p>No hay libros</p>
@endforelse
</table>

@endsection

    
