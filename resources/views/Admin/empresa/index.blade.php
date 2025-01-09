@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Informacion de la empresa</h1>
      </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Correo 1</th>
              <th scope="col">Correo 2</th>
              <th scope="col">Numero 1</th>
              <th scope="col">Numero 2</th>
              <th scope="col">Logo</th>
              <th scope="col">Imagen de fondo</th>
              <th scope="col">direccion</th>
              <th scope="col">geoferencia</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($empresa as $item)
                <tr>
                  <td>{{$item->correo1}}</td>
                  <td>{{$item->correo2}}</td>
                  <td>{{$item->numero1}}</td>
                  <td>{{$item->numero2}}</td>
                  <td><img width="150px" height="150px" src="{{asset('imagen/'.$item->logo) }}" alt="logo empresa" srcset=""></td>
                  <td><img width="150px" height="150px" src="{{asset('imagen/'.$item->imagen_fondo) }}" alt="fondo empresa" srcset=""></td>
                  <td>{{$item->direccion}}</td>
                  <td>
                    <iframe src="{{$item->georeferencia}}" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </td>
                  <td>
                    <a  href="/empresa/edit/{{$item->id}}" class="btn btn-outline-success">Editar</a>               
                  </td>
                </tr>
            @endforeach
          
          </tbody>
        </table>
      </div>
</div>
@endsection