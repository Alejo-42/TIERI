@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>EDITAR PRODUCTO DE HERRAMIENTAS</h1>

    <form action="/products/herramientas/update/{{$herramienta->image}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <input type="hidden" name="id" value="{{$herramienta->id}}">

        <label for="name">Nombre de la herramienta:</label><br>
        <input value="{{$herramienta->name}}" type="text" name="name" id="name" required><br>

        <label for="description">Descripcion:</label><br>
        <textarea name="description" id="description">{{$herramienta->description}}</textarea><br>

        <label for="image">Imagen:</label><br>
        <input type="file" name="image" id="image"><br>
        <div>
            <img width="150px" height="150px" src="{{asset('imagen/'.$herramienta->image)}}" alt="Imagen" srcset="">
        </div>

        <label for="price">Precio:</label><br>
        <input value="{{$herramienta->price}}" type="text" name="price" id="price" required><br>

        <label for="stock">Stock:</label><br>
        <input value="{{$herramienta->stock}}" type="text" name="stock" id="stock" required><br>


        <button class="btn btn-outline-success" type="submit">Actualizar</button>
    </form>
</div>
@endsection