@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Carta</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
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
            @foreach ($card as $item)
                <tr>
                    <td><img width="250px" height="200px" src="{{asset('imagen/'.$item->image)}}" ></td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td><a href="{{$item->link}}" target="_blank" rel="noopener noreferrer">{{$item->title}}</a></td>
                    <td>
                          <a class="btn btn-outline-primary" href="/editCard/{{$item->id}}">Editar</a>
                        @if ($item->status == 'activo')
                          <a class="btn btn-outline-danger" href="/statusCard/{{$item->id}}">Desactivar</a>
                        @else
                          <a class="btn btn-outline-success" href="/statusCard/{{$item->id}}">Activar</a>
                        @endif
                    </td>
                 
                   
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>

@endsection