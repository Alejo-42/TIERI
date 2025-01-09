@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<div class="container">

<div id="inicio" class="productos">
            <h3>Nuestros productos más populares:</h3>
            <div class="producto">
              @foreach($products as $producto)
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset('imagen/'.$producto->image)}}" class="card-img-top" alt="Producto">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$producto->name}}</h5>
                      <p class="card-text">{{$producto->description}}</p>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
        <div id="servicios" class="servicios">
            <h3>Nuestros servicios:</h3>
            <div class="serv-ocultos">
                <div class="servicios-section">
                  @foreach($servicios as $servicio)
                    <div class="section-serv">
                        <div class="section-image">
                            <img src="{{asset('imagen/'.$servicio->image)}}" alt="Servicios">
                        </div>
                        <div class="section-text">
                            <h5>{{$servicio->title}}</h5>
                            <p>{{$servicio->description}}</p>
                      </div>
                    </div>
                    @endforeach
            </div>
        </div>
        <div id="sobre-n" class="sobre-n">
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