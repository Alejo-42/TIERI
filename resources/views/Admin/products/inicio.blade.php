@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/products/inicio.css')}}">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Seleccione la categoria de productos:</h1>
      </div>
    <div class="categorias">
        <ul>
            <li><a href="/products/iluminacion">Productos de Iluminación</a></li>
            <li><a href="/products/herramientas">Productos de Herramientas</a></li>
        </ul>
    </div>
</div>

@endsection