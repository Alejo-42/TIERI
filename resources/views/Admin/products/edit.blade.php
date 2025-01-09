@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Producto</h2>

    <form action="/productos/update/{{$product->image}}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('PUT')

       <input type="hidden" name="id" value="{{$product->id}}">

        <div class="col-md-6 position-relative">
          <label for="title" class="form-label">Titulo</label>
          <input type="text" class="form-control" id="title" value="{{$product->title}}" name="title"  required>
        </div>

        <div class="col-md-12 position-relative">
            <label for="description" class="form-label">Descripcion</label>
            <textarea  class="form-control" name="description" id="description">{{$product->description}}</textarea>
        </div>

        <div class="col-md-6 position-relative">
          <label for="price" class="form-label">Precio</label>
          <input type="text" class="form-control" id="price" value="{{$product->price}}" name="price" required>
        </div>

        <div class="col-md-12 position-relative">
          <label for="image" class="form-label">Imagen</label>
          <input type="file" class="form-control" id="image" name="image" >
        </div>

        <div class="col-md-12">
            <figure class="figure">
                <img src="{{asset('imagen/'.$product->image)}}" class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Actualizar</button>
        </div>
      </form>
</div>
   

@endsection