@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de noticias desactivadas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
        
                <a class="btn btn-outline-success" href="/createHome">Ingresar</a>
          </div>
        </div>
      </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Imagen</th>
              <th scope="col">Titulo</th>
              <th scope="col">Descripcion</th>
              <th scope="col">link</th>
              <th scope="col">Accion</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($home as $item)
                <tr>
                  <td> <img width="250px" height="200px" src="{{asset('imagen/'.$item->image)}}" alt=""> </td>
                  <td>{{$item->title}}</td>
                  <td> {{$item->description}}</td>
                  <td> <a style="text-decoration: none; color: black;" href="{{$item->link}}">{{$item->title}}</a></td>
                  <td>
                    <a type="button" class="btn btn-outline-primary" href="/editHome/{{$item->id}}">Editar</a>
                    <a type="button" class="btn btn-outline-success" href="/statusHome/{{$item->id}}">Activar</a>
                  </td>
                </tr>
            @endforeach
         
          </tbody>
        </table>
      </div>
</div>

@endsection