@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Informacion de SEO</h1>

    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Titulo</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Palabra Claves</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($seo as $seo)
                <tr>
                  <td>{{$seo->title}}</td>
                  <td>{{$seo->description}}</td>
                  <td>{{$seo->keywords}}</td>
                  <td>
                    <a type="button" class="btn btn-outline-primary" href="/editSeo/{{$seo->id}}">Editar</a>
                  </td>
                </tr>
            @endforeach
         
          </tbody>
        </table>
      </div>
</div>

@endsection