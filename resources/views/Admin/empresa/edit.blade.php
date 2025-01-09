@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Datos Empresa</h2>

    <form action="/empresa/update/{{$edit->logo}}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        <input type="hidden" value="{{$edit->id}}" name="id">
        
        <div class="col-md-6 position-relative">
          <label for="correo1" class="form-label">Correo 1</label>
          <input type="text" class="form-control" id="correo1" value="{{$edit->correo1}}" name="correo1"  required>
        </div>

        <div class="col-md-6 position-relative">
          <label for="correo2" class="form-label">Correo 2</label>
          <input type="text" class="form-control" id="correo2" value="{{$edit->correo2}}" name="correo2"  required>
        </div>

        <div class="col-md-6 position-relative">
          <label for="numero1" class="form-label">Numero 1</label>
          <input type="text" class="form-control" id="numero1" value="{{$edit->numero1}}" name="numero1" required>
        </div>

        <div class="col-md-6 position-relative">
          <label for="numero2" class="form-label">Numero 2</label>
          <input type="text" class="form-control" id="numero2" value="{{$edit->numero2}}" name="numero2" required>
        </div>

        <div class="col-md-12 position-relative">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" value="{{$edit->logo}}" name="logo" >
             <br>
             <img src="{{asset('imagen/'.$edit->logo)}}" class="img-thumbnail" alt="...">
        </div>

        <div class="col-md-12 position-relative">
            <label for="imagen_fondo" class="form-label">Imagen de fondo</label>
            <input type="file" class="form-control" id="imagen_fondo" value="{{$edit->imagen_fondo}}" name="imagen_fondo" >
             <br>
             <img src="{{asset('imagen/'.$edit->imagen_fondo)}}" class="img-thumbnail" alt="...">
        </div>

        <div class="col-md-12 position-relative">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" value="{{$edit->direccion}}" name="direccion" required>
          </div>

        <div class="col-md-12 position-relative">
            <label for="georefencia" class="form-label">Enlace Google Maps</label>
            <textarea name="georeferencia" class="form-control" id="georefencia">{{$edit->georeferencia}}</textarea>
        </div>

        <div class="container">
            <iframe src="{{$edit->georeferencia}}" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Actualizar</button>
        </div>
      </form>
</div>
   

@endsection