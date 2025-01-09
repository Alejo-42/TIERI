@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de productos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
        
                <a class="btn btn-outline-success" href="/products/create">Ingresar</a>
          </div>
        </div>
      </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nombre del producto</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Precio</th>
              <th scope="col">Imagen</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
                <tr>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                  <td><img width="150px" height="150px" src="{{asset('imagen/'.$product->image) }}" alt="Imagen" srcset=""></td>
                  <td>
                    <a  href="/products/edit/{{$product->id}}" class="btn btn-outline-success">Editar</a>
                    <a  href="/products/status/{{$product->id}}" class="btn btn-outline-danger">Activar</a>
               
                  </td>
                </tr>
            @endforeach
          
          </tbody>
        </table>
      </div>
</div>

@endsection