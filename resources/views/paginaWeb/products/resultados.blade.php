<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/products/style.css')}}">
    <title>RESULTADOS</title>
</head>
  <body>
    <div class="productos">
        <h3>El resultado de la busqueda es:</h3>
        <div class="productos-categorias">
            <div class="producto-iluminacion">
                <h2>Iluminación:</h2>
                <div class="producto">
                    @foreach($iluminacion as $producto)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('imagen/'.$producto->image)}}" class="card-img-top" alt="Producto">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$producto->name}}</h5>
                            <p class="card-text">{{$producto->description}}</p>
                            <op class="card-price">${{$producto->price}}</op>
                            <p class="card-stock">Actualmente contamos con: {{$producto->stock}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="producto-herramientas">
                <h2>Herramientas:</h2>
                <div class="producto">
                    @foreach($herramientas as $producto)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('imagen/'.$producto->image)}}" class="card-img-top" alt="Producto">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$producto->name}}</h5>
                            <p class="card-text">{{$producto->description}}</p>
                            <op class="card-price">${{$producto->price}}</op>
                            <p class="card-stock">Actualmente contamos con: {{$producto->stock}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <p class="derechos">&copy 2025 TIERI. Todos los derechos reservados. | Política de Privacidad | Términos de Uso</p>
</body>
</html>