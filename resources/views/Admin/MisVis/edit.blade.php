@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Mision y Vision</h2>
    <form action="/MisVis/update/{{$MisVis->image}}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
      <input type="hidden" name="id" value="{{$MisVis->id}}">
        <div class="col-md-12 position-relative">
            <label for="name" class="form-label">Nombre</label>
            <textarea  class="form-control" name="name" id="name">{{$MisVis->name}}</textarea>
        </div>

        <div class="col-md-12 position-relative">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="col-md-12">
            <figure class="figure">
                <img src="{{asset('imagen/'.$MisVis->image)}}" class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Actualizar</button>
        </div>
      </form>
</div>
   
@endsection