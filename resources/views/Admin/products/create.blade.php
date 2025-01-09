@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Ingresar Precio</h2>

    <form action="/products/store" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('POST')
        <div class="col-md-6 position-relative">
          <label for="name" class="form-label">Nombre del producto:</label>
          <input type="text" class="form-control" id="name" name="name"  required>
        </div>

        <div class="col-md-12 position-relative">
            <label for="description" class="form-label">Descripcion</label>
            <textarea  class="form-control" name="description" id="description"></textarea>
        </div>

        <div class="col-md-6 position-relative">
          <label for="price" class="form-label">Precio:</label>
          <input type="text" class="form-control" id="price" name="price" required>
        </div>

        <div class="col-md-12 position-relative">
          <label for="image" class="form-label">Imagen:</label>
          <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Guardar</button>
        </div>
      </form>
</div>
@endsection