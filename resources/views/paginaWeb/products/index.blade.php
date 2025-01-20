<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/products/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Nuestros Productos</title>
</head>
<body>
    <div class="productos">
        <h3>Todos nuestros productos:</h3>
        <div class="busqueda">
            <form action="/buscar" method="GET">
                <input type="text" name="busqueda" placeholder="Buscar producto..." required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
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
                            <p class="card-price">${{$producto->price}}</p>
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
                            <p class="card-price">${{$producto->price}}</p>
                            <p class="card-stock">Actualmente contamos con: {{$producto->stock}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<p class="derechos">&copy 2025 TIERI. Todos los derechos reservados. | Política de Privacidad | Términos de Uso</p>
</body>
</html>