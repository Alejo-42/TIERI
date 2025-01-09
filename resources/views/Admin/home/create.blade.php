@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Ingresar Carrusel</h2>

    <form action="/storeHome" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" >
        @csrf
        @method('POST')

        <div class="col-md-6 position-relative">
          <label for="title" class="form-label">Titulo</label>
          <input type="text" class="form-control" id="title" name="title"  required>
        </div>

        <div class="col-md-6 position-relative">
          <label for="link" class="form-label">Boton</label>
          <input type="text" class="form-control" id="link" name="link" required>
        </div>

        <div class="col-md-6 position-relative">
            <label for="image" class="form-label">Carrusel</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <div class="col-md-12 position-relative">
            <label for="description" class="form-label">Descripcion</label>
            <textarea class="form-control" id="description" name="description" ></textarea>
        </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Guardar</button>
        </div>
      </form>
</div>
   

@endsection