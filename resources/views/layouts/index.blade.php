<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('imagen/'.$empresa->logo)}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('seo')
  </head>
  <body style="background-image: url({{ asset('imagen/'.$empresa->imagen_fondo) }});">
        <header>
        <nav>
        <div class="icono">
            <img src="{{asset('imagen/'.$empresa->logo)}}" alt="Icono">
        </div>
        <button id="BtnAbrir"><i class="fa-solid fa-caret-down"></i></button>
        <ul class="inicio">
          <button class="BtnCerrar"><i class="fa-solid fa-xmark"></i></button>
            <li><a href="#inicio"><i class="fa-solid fa-house"></i> Inicio</a></li>
            <li><a href="#servicios"><i class="fa-solid fa-screwdriver-wrench"></i> Servicios</a></li>
            <li><a href="#sobre-n"><i class="fa-solid fa-users-gear"></i> Sobre nosotros</a></li>
            <li><a href="#contactos"><i class="fa-solid fa-phone-volume"></i> Contacto</a></li>
        </ul>
        </nav>
    </header>
    <main> 
        @yield('content')
    </main>
    <footer>
    <div class="info-footer">
            <div id="contactos" class="contactos">
                <h3>Contactanos:</h3>
                <div class="info-contactos">
                    <div class="contacto">
                        <h3>Números:</h3>
                        <div>
                            <div class="numero">
                                <i class="fa-solid fa-phone"></i>
                                <p><a href="tel:+59323203115">(02) 3203-115</a></p>
                            </div>
                            <div class="wsp">
                                <a target="_blank" title="{{$empresa->numero1}}" href="https://wa.me/593{{$empresa->numero1}}">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a target="_blank" title="{{$empresa->numero2}}" href="https://wa.me/593{{$empresa->numero2}}">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="correo">
                        <h3>Correo:</h3>
                        <div>
                            <i class="fa-solid fa-envelope"></i>
                            <p><a target="_blank" href="mailto:{{$empresa->correo1}}">{{$empresa->correo1}}</a></p>
                        </div>
                        <div>
                            <i class="fa-solid fa-envelope"></i>
                            <p><a target="_blank" href="mailto:{{$empresa->correo2}}">{{$empresa->correo2}}</a></p>
                        </div>
                    </div>
                    <div class="direccion">
                        <h3>Dirección:</h3>
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                            <p>{{$empresa->direccion}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="geo">
                <div class="titulo">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <h3>Geolocalización</h3>
                </div>
                <div class="frame">
                    <iframe src="{{$empresa->georeferencia}}" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="login">
                            <a target="__blank" title="Login" href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                        </div>
                    </div>
                </div>
        </div>
        <p class="derechos">&copy 2025 TIERI. Todos los derechos reservados. | Política de Privacidad | Términos de Uso</p>
    </footer>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>