@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de servicios</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
        
                <a class="btn btn-outline-success" href="/servicios/create">Ingresar</a>
                <a class="btn btn-outline-danger" href="/serviciosD">Desactivados</a>
          </div>
        </div>
      </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Titulo</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Imagen</th>
              <th scope="col">Contacto</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($servicios as $servicio)
                <tr>
                  <td>{{$servicio->title}}</td>
                  <td>{{$servicio->description}}</td>
                  <td><img width="150px" height="150px" src="{{asset('imagen/'.$servicio->image) }}" alt="Imagen" srcset=""></td>
                  <td><a  style="text-decoration: none; color:black;" href="{{$servicio->link}}">{{$servicio->contact}}</a></td>
                  <td>
                    <a  href="/servicios/edit/{{$servicio->id}}" class="btn btn-outline-success">Editar</a>
                    <a  href="/servicios/status/{{$servicio->id}}" class="btn btn-outline-danger">Desactivar</a>
               
                  </td>
                </tr>
            @endforeach
          
          </tbody>
        </table>
      </div>
</div>

@endsection