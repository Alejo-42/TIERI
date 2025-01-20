@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<div class="container">

  <div class="productos">
      <h3>Productos:</h3>
      <a class="btn btn-light" href="/productos">VER PRODUCTOS</a>
  </div>


  <div class="servicios">
    <h3>Nuestros servicios:</h3>
        <div class="servicios-section">
          @foreach($servicios as $servicio)
            <div class="section-serv">
                <div class="section-image">
                    <img src="{{asset('imagen/'.$servicio->image)}}" alt="Servicios">
                </div>
                <div class="section-text">
                    <h5>{{$servicio->title}}</h5>
                    <p>{{$servicio->description}}</p>
                    <p class="contacto"><a target="_blank" title="{{$servicio->contact}}" href="https://wa.me/593{{$servicio->contact}}">
                      <i class="fa-brands fa-whatsapp"></i>
                    </a></p>
                </div>
            </div>
            @endforeach
        </div>
  </div>


  <div class="sobre-n">
    <h3>Sobre nosotros:</h3>
      <p>{{$SobreNosotros->name}}</p>
      <div>
        <img src="{{asset('imagen/'.$SobreNosotros->image)}}" alt="">
      </div>
  </div>


  <div class="mv">
    
    <div class="mision">
      <h3><i class="fa-solid fa-chart-simple"></i> Misión</h3>
        <p>{{$Mision->name}}</p>
      <div>
          <img src="{{asset('imagen/'.$Mision->image)}}" alt="">
      </div>
    </div>
    <div class="vision">
      <div>
          <img src="{{asset('imagen/'.$Vision->image)}}" alt="">
      </div>
      <h3><i class="fa-solid fa-arrow-up-right-dots"></i> Visión</h3>
      <p>{{$Vision->name}}</p>
    </div>

  </div>
</div>
@endsection