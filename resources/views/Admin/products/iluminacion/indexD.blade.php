@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>PRODUCTOS DE ILUMINACION DESACTIVADOS</h1>
    <a href="/products/iluminacion"><button type="button" class="btn btn-outline-secondary">Volver</button></a>
    <table class="table table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">PRECIO</th>
                <th scope="col">STOCK</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <img width="150px" height="150px" src="{{asset('imagen/'.$item->image)}}" alt="Imagen" srcset="">                
                </td>
                <td>{{$item->price}}</td>
                <td>{{$item->stock}}</td>
                <td>
                <a href="/products/iluminacion/status/{{$item->id}}"><button type="button" class="btn btn-outline-success">Activar</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection