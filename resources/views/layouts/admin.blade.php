<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('sitioWeb/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('PanelControl/dashboard.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <title>Panel de Control</title>
</head>
<body>
  <header style="display: flex; justify-content: start;" class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a target="_blank" class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Pagina Web</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav" style="display:flex;">
      <div class="nav-item text-nowrap">
        <form id="form" action="{{ route('logout') }}" method="POST">
          @csrf
          <a id="cerrar"  class="nav-link px-3">CERRAR SESION</a>
        </form>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav style="top:0;" id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/servicios">
                <span data-feather="file"></span>
                Servicios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/products">
                <span data-feather="file"></span>
                Productos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/MisVis">
                <span data-feather="users"></span>
                Mision y Vision
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/empresa">
                <span data-feather="bar-chart-2"></span>
                Empresa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/seo">
                <span data-feather="layers"></span>
               Seo
              </a>
            </li>
          </ul>

        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
        @yield('content')
       
      </main>
    </div>
  </div>
 <script src="{{asset('PanelControl/auth.js')}}"></script>
 <script src="{{asset('sitioWeb/js/bootstrap.bundle.min.js')}}"></script>
 <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

</body>
</html>

