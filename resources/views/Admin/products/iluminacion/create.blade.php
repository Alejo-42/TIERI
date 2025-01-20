@extends('layouts.admin')

@section('content')
<div class="container">
    <br class="featurette-divider">
    <h1>INGRESAR PRODUCTO DE ILUMINACION</h1>

    <form action="/products/iluminacion/store" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <label for="name">Nombre del producto:</label><br>
        <input type="text" name="name" id="name" required><br>

        <label for="description">Descripcion:</label><br>
        <textarea name="description" id="description"></textarea><br>

        <label for="price">Precio:</label><br>
        <input type="text" name="price" id="price" required><br>

        <label for="stock">Stock:</label><br>
        <input type="text" name="stock" id="stock" required><br>
        
        <label for="image">Imagen:</label><br>
        <input type="file" name="image" id="image" required><br>
        
        <button class="btn btn-outline-success" type="submit">Guardar</button>
    </form>

</div>
@endsection