@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Informacion de SEO</h2>

    <form action="/updateSeo" method="POST" class="row g-3 needs-validation" >
        @csrf
        @method('PUT')

        <input type="hidden" value="{{$edit->id}}" name="id">
        

        <div class="col-md-12 position-relative">
            <label for="title" class="form-label">Titulo</label>
            <textarea name="title" class="form-control" id="title">{{$edit->title}}</textarea>
        </div>
        
        <div class="col-md-12 position-relative">
            <label for="description" class="form-label">Descripcion</label>
            <textarea name="description" class="form-control" id="description">{{$edit->description}}</textarea>
        </div>

        
        <div class="col-md-12 position-relative">
            <label for="keywords" class="form-label">Palabras Claves</label>
            <textarea name="keywords" class="form-control" id="keywords">{{$edit->keywords}}</textarea>
        </div>


        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Actualizar</button>
        </div>
      </form>
</div>
   

@endsection