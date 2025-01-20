@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>EDITAR PRODUCTO DE ILUMINACION</h1>

    <form action="/products/iluminacion/update/{{$product->image}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <input type="hidden" name="id" value="{{$product->id}}">

        <label for="name">Nombre del producto:</label><br>
        <input value="{{$product->name}}" type="text" name="name" id="name" required><br>

        <label for="description">Descripcion:</label><br>
        <textarea name="description" id="description">{{$product->description}}</textarea><br>

        <label for="image">Imagen:</label><br>
        <input type="file" name="image" id="image"><br>
        <div>
            <img width="150px" height="150px" src="{{asset('imagen/'.$product->image)}}" alt="Imagen" srcset="">
        </div>

        <label for="price">Precio:</label><br>
        <input value="{{$product->price}}" type="text" name="price" id="price" required><br>

        <label for="stock">Stock:</label><br>
        <input value="{{$product->stock}}" type="text" name="stock" id="stock" required><br>


        <button class="btn btn-outline-success" type="submit">Actualizar</button>
    </form>
</div>
@endsection