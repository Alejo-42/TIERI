@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Editar Carrusel</h2>

    <form action="/updateHome/{{$home->image}}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{$home->id}}">
        <div class="col-md-6 position-relative">
          <label for="title" class="form-label">Titulo</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$home->title}}"  required>
        </div>

        <div class="col-md-6 position-relative">
          <label for="link" class="form-label">Boton</label>
          <input type="text" class="form-control" id="link" name="link" value="{{$home->link}}" required>
        </div>

        <div class="col-md-6 position-relative">
            <label for="image" class="form-label">Carrusel</label>
            <input type="file" class="form-control" id="image" name="image" >
            <br>
            <img src="{{asset('imagen/'.$home->image)}}" class="img-thumbnail" >

        </div>

        <div class="col-md-12 position-relative">
            <label for="description" class="form-label">Descripcion</label>
            <textarea class="form-control" id="description" name="description" >{{$home->description}}</textarea>
        </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Actualizar</button>
        </div>
      </form>
</div>
   

@endsection